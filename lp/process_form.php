<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/phpmailer---/Exception.php';
require __DIR__ . '/phpmailer---/PHPMailer.php';
require __DIR__ . '/phpmailer---/SMTP.php';

error_reporting(E_ALL);
ini_set('display_errors', '0');

$logFile = __DIR__ . '/form_errors.log';

function logMessage(string $message): void
{
    global $logFile;

    @file_put_contents(
        $logFile,
        '[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL,
        FILE_APPEND | LOCK_EX
    );
}

function responseError(string $message): never
{
    logMessage('ERROR: ' . $message);

    http_response_code(200);
    header('Content-Type: text/plain; charset=UTF-8');

    echo 'error';
    exit;
}


// ==========================================================
// REQUEST
// ==========================================================

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responseError('Invalid request method: ' . ($_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN'));
}


// ==========================================================
// FORM DATA
// ==========================================================

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$phone = trim((string)($_POST['phone'] ?? ''));
$title = trim((string)($_POST['title'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));
$pageUrl = trim((string)($_POST['page_url'] ?? ''));


// ==========================================================
// VALIDATION
// ==========================================================

if ($name === '') {
    responseError('Name is empty');
}

if ($email === '') {
    responseError('Email is empty');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    responseError('Invalid email address');
}


// ==========================================================
// PAGE URL
// ==========================================================

if (
    $pageUrl === '' &&
    !empty($_SERVER['HTTP_REFERER'])
) {
    $pageUrl = $_SERVER['HTTP_REFERER'];
}

if (!filter_var($pageUrl, FILTER_VALIDATE_URL)) {
    $pageUrl = '-';
}


// ==========================================================
// HOSTINGER SMTP
// ==========================================================

$smtpHost = 'smtp.hostinger.com';
$smtpPort = 465;

$smtpUsername = 'info@theshakespearepublishinghouse.com';

/*
|--------------------------------------------------------------------------
| IMPORTANT
|--------------------------------------------------------------------------
|
| Put the NEW password for:
|
| info@theshakespearepublishinghouse.com
|
| here.
|
*/

$smtpPassword = (require __DIR__ . '/../includes/mail-config.php')['password']; // kept out of git

$fromEmail = 'info@theshakespearepublishinghouse.com';
$fromName  = 'Shakespeare Publishing House Website';

$toEmail = 'info@theshakespearepublishinghouse.com';
$toName  = 'Shakespeare Publishing House';


// ==========================================================
// CREATE MAIL
// ==========================================================

$mail = new PHPMailer(true);

try {

    // ------------------------------------------------------
    // SMTP
    // ------------------------------------------------------

    $mail->isSMTP();

    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;

    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;

    $mail->Port = $smtpPort;

    /*
     * Hostinger:
     * 465 = SSL
     */
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    $mail->Timeout = 30;


    // ------------------------------------------------------
    // ENCODING
    // ------------------------------------------------------

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';


    // ------------------------------------------------------
    // FROM
    // ------------------------------------------------------

    $mail->setFrom(
        $fromEmail,
        $fromName
    );


    // ------------------------------------------------------
    // TO
    // ------------------------------------------------------

    $mail->addAddress(
        $toEmail,
        $toName
    );


    // ------------------------------------------------------
    // REPLY TO
    // ------------------------------------------------------

    $mail->addReplyTo(
        $email,
        $name
    );


    // ======================================================
    // SAFE HTML VALUES
    // ======================================================

    $safeName = htmlspecialchars(
        $name,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );

    $safeEmail = htmlspecialchars(
        $email,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );

    $safePhone = htmlspecialchars(
        $phone !== '' ? $phone : '-',
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );

    $safeTitle = htmlspecialchars(
        $title !== '' ? $title : '-',
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );

    $safeMessage = nl2br(
        htmlspecialchars(
            $message !== '' ? $message : '-',
            ENT_QUOTES | ENT_SUBSTITUTE,
            'UTF-8'
        )
    );

    $safePageUrl = htmlspecialchars(
        $pageUrl,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );


    // ======================================================
    // EMAIL
    // ======================================================

    $mail->isHTML(true);

    $mail->Subject =
        'New Consultation Request - ' . $name;


    $mail->Body = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Consultation Request</title>
</head>

<body style="
    margin:0;
    padding:30px;
    background:#f5f5f5;
    font-family:Arial,Helvetica,sans-serif;
">

<div style="
    max-width:700px;
    margin:auto;
    background:#ffffff;
    border:1px solid #e5e5e5;
">

    <div style="
        background:#122d55;
        padding:25px;
        text-align:center;
    ">

        <h2 style="
            margin:0;
            color:#ffffff;
        ">
            New Consultation Request
        </h2>

    </div>

    <div style="padding:25px;">

        <table
            width="100%"
            cellpadding="12"
            cellspacing="0"
            border="1"
            style="border-collapse:collapse;"
        >

            <tr>
                <td><strong>Name</strong></td>
                <td>' . $safeName . '</td>
            </tr>

            <tr>
                <td><strong>Email</strong></td>
                <td>' . $safeEmail . '</td>
            </tr>

            <tr>
                <td><strong>Phone</strong></td>
                <td>' . $safePhone . '</td>
            </tr>

            <tr>
                <td><strong>Book Title</strong></td>
                <td>' . $safeTitle . '</td>
            </tr>

            <tr>
                <td><strong>Message</strong></td>
                <td>' . $safeMessage . '</td>
            </tr>

            <tr>
                <td><strong>Submitted From</strong></td>
                <td>' . $safePageUrl . '</td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>
';


    // ======================================================
    // PLAIN TEXT
    // ======================================================

    $mail->AltBody =
        "NEW CONSULTATION REQUEST\n\n" .
        "Name: " . $name . "\n" .
        "Email: " . $email . "\n" .
        "Phone: " . $phone . "\n" .
        "Book Title: " . $title . "\n\n" .
        "Message:\n" .
        $message . "\n\n" .
        "Submitted From:\n" .
        $pageUrl;


    // ======================================================
    // SEND
    // ======================================================

    $mail->send();


    // ======================================================
    // SUCCESS
    // ======================================================

    logMessage(
        'SUCCESS: Email sent successfully. ' .
        'Lead email: ' . $email
    );

    http_response_code(200);
    header('Content-Type: text/plain; charset=UTF-8');

    echo 'success';
    exit;


} catch (Exception $e) {

    logMessage(
        'PHPMailer Exception: ' .
        $mail->ErrorInfo .
        ' | Exception: ' .
        $e->getMessage()
    );

    responseError(
        'PHPMailer failed: ' .
        $mail->ErrorInfo
    );

} catch (Throwable $e) {

    logMessage(
        'PHP Throwable: ' .
        $e->getMessage()
    );

    responseError(
        'PHP error: ' .
        $e->getMessage()
    );
}