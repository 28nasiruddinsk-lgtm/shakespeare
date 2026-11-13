<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok' => false, 'message' => 'Invalid request method.']);
  exit;
}

use PHPMailer\PHPMailer\PHPMailer;

// Log any fatal PHP error to storage/form-errors.log so nothing fails silently
register_shutdown_function(function () {
  $e = error_get_last();
  if ($e && in_array($e['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR], true)) {
    @file_put_contents(__DIR__ . '/storage/form-errors.log',
      date('[Y-m-d H:i:s] ') . 'PHP fatal: ' . $e['message'] . ' in ' . basename($e['file']) . ':' . $e['line'] . PHP_EOL,
      FILE_APPEND | LOCK_EX);
  }
});

function form_value($key) {
  return trim((string)($_POST[$key] ?? ''));
}

function clean_text($value) {
  $value = strip_tags((string)$value);
  $value = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', '', $value);
  return trim($value);
}

$storageDir = __DIR__ . '/storage';
$storageOk = is_dir($storageDir) || mkdir($storageDir, 0755, true);

function log_mail_error($storageOk, $storageDir, $message) {
  if (!$storageOk) return;
  $line = date('[Y-m-d H:i:s] ') . $message . PHP_EOL;
  @file_put_contents($storageDir . '/form-errors.log', $line, FILE_APPEND | LOCK_EX);
}

$formType = clean_text(form_value('form_type')) ?: 'Website Inquiry';
$name = clean_text(form_value('name'));
$email = filter_var(form_value('email'), FILTER_VALIDATE_EMAIL) ? form_value('email') : '';
$phone = clean_text(form_value('phone'));
$service = clean_text(form_value('service'));
$message = clean_text(form_value('message'));
// Hidden anti-spam field. Renamed from "website" because browser autofill
// was filling it and real enquiries were being silently thrown away.
$honeypot = form_value('hp_check');
$isSpam = $honeypot !== '';
if ($isSpam) {
  $formType = '[POSSIBLE SPAM] ' . $formType;
}

$isNewsletter = strtolower($formType) === 'newsletter';

if (!$email || (!$isNewsletter && $name === '')) {
  http_response_code(422);
  echo json_encode(['ok' => false, 'message' => 'Please add your name and a valid email address.']);
  exit;
}

$submittedAt = date('Y-m-d H:i:s');

// ---- 1. Save to CSV first, so a submission is never lost even if the ----
// ----    mail send below fails, hangs, or is slow. ----
$saved = false;

if ($storageOk) {
  $csvPath = $storageDir . '/form-submissions.csv';
  $handle = fopen($csvPath, 'c+b');

  if ($handle && flock($handle, LOCK_EX)) {
    $isNewFile = filesize($csvPath) === 0;
    fseek($handle, 0, SEEK_END);

    if ($isNewFile) {
      fputcsv($handle, ['submitted_at', 'form_type', 'name', 'email', 'phone', 'service', 'message', 'source', 'ip']);
    }

    $saved = fputcsv($handle, [
      $submittedAt,
      $formType,
      $name,
      $email,
      $phone,
      $service,
      $message,
      $_SERVER['HTTP_REFERER'] ?? '',
      $_SERVER['REMOTE_ADDR'] ?? '',
    ]) !== false;

    fflush($handle);
    flock($handle, LOCK_UN);
  }

  if ($handle) {
    fclose($handle);
  }
}

if (!$saved) {
  http_response_code(500);
  echo json_encode(['ok' => false, 'message' => 'We could not save your request right now. Please call us at +1 646 258 0616.']);
  exit;
}

// Spam is saved to the CSV (so nothing is ever lost) but no email is sent
if ($isSpam) {
  echo json_encode(['ok' => true, 'message' => 'Thank you. Your request has been received.', 'saved' => true, 'mail' => 'skipped (spam field filled)']);
  exit;
}

ignore_user_abort(true);
@set_time_limit(40);
$mailStatus = 'not attempted';

// ---- 3. Send the notification email via SMTP (PHPMailer). ----
// Plain PHP mail() was used here before and silently failed on every
// submission since 2026-07-03 (mail() returned false every time; nothing
// was ever delivered, though every submission WAS being saved to
// storage/form-submissions.csv). Settings live in includes/mail-config.php.
// Load PHPMailer + config only now, AFTER the submission is saved, so a
// missing file can never stop the form from saving.
$needed = [
  __DIR__ . '/phpmailer/Exception.php',
  __DIR__ . '/phpmailer/PHPMailer.php',
  __DIR__ . '/phpmailer/SMTP.php',
  __DIR__ . '/includes/mail-config.php',
];
foreach ($needed as $file) {
  if (!is_file($file)) {
    $mailStatus = 'Missing file on server: ' . str_replace(__DIR__ . '/', '', $file);
    log_mail_error($storageOk, $storageDir, $mailStatus);
    echo json_encode(['ok' => true, 'message' => 'Thank you. Your request has been received.', 'saved' => true, 'mail' => $mailStatus]);
    exit;
  }
}
require_once $needed[0];
require_once $needed[1];
require_once $needed[2];
$mailConfig = require $needed[3];

$bodyLines = [
  'New website form submission',
  '',
  'Form: ' . $formType,
  'Submitted: ' . $submittedAt,
  'Name: ' . ($name ?: 'N/A'),
  'Email: ' . $email,
  'Phone: ' . ($phone ?: 'N/A'),
  'Service: ' . ($service ?: 'N/A'),
  '',
  'Message:',
  $message ?: 'N/A',
  '',
  'Source: ' . ($_SERVER['HTTP_REFERER'] ?? 'Direct'),
  'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown'),
];

try {
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host          = $mailConfig['host'];
  $mail->SMTPAuth      = true;
  $mail->Username      = $mailConfig['username'];
  $mail->Password      = $mailConfig['password'];
  $mail->SMTPSecure    = $mailConfig['encryption'];
  $mail->Port          = $mailConfig['port'];
  $mail->Timeout       = 12; // fail fast rather than hang indefinitely
  $mail->SMTPKeepAlive = false;

  $mail->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
  $mail->addAddress($mailConfig['to_email']);
  if ($email) {
    $mail->addReplyTo($email, $name ?: $email);
  }

  $mail->isHTML(false);
  $mail->Subject = 'New ' . $formType . ' - Shakespeare Publishing House';
  $mail->Body = implode("\r\n", $bodyLines);

  $mail->send();
  $mailStatus = 'sent';
} catch (\Throwable $e) {
  $mailStatus = 'PHPMailer error: ' . ((isset($mail) && $mail->ErrorInfo) ? $mail->ErrorInfo : $e->getMessage());
  log_mail_error($storageOk, $storageDir, $mailStatus);

  // Last-resort fallback: bare mail(), in case SMTP is ever unreachable
  // but the server's local mail transport happens to work.
  if (function_exists('mail')) {
    $fromHost = preg_replace('/[^a-zA-Z0-9.-]/', '', $_SERVER['HTTP_HOST'] ?? 'shakespearepublishinghouse.com');
    $headers = [
      'MIME-Version: 1.0',
      'Content-Type: text/plain; charset=UTF-8',
      'From: Shakespeare Publishing House <noreply@' . $fromHost . '>',
      'Reply-To: ' . ($name ? $name . ' <' . $email . '>' : $email),
    ];
    $fallbackMailed = @mail($mailConfig['to_email'], 'New ' . $formType . ' - Shakespeare Publishing House', implode("\r\n", $bodyLines), implode("\r\n", $headers));
    if (!$fallbackMailed) {
      log_mail_error($storageOk, $storageDir, 'Fallback mail() also failed.');
    } else {
      $mailStatus .= ' | sent with fallback mail()';
    }
  }
}

// ---- 4. Answer the browser (the 'mail' field shows in DevTools > Network > Response) ----
echo json_encode([
  'ok' => true,
  'message' => $isNewsletter ? 'Thank you for subscribing.' : 'Thank you. Your request has been received.',
  'saved' => true,
  'mail' => $mailStatus,
]);
