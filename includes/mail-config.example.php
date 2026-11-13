<?php
/*
 * SMTP settings for outgoing site email (submit-form.php).
 *
 * IMPORTANT: fill in 'password' yourself on the server - do not send it
 * back through chat. (Do not overwrite an already-configured copy of this
 * file with this placeholder version.)
 */

return [
  'host'         => 'smtp.hostinger.com',
  'port'         => 465, // 465 = implicit TLS, 587 = STARTTLS
  'encryption'   => 'ssl', // PHPMailer::ENCRYPTION_SMTPS - use 'ssl' for port 465, 'tls' for port 587
  'username'     => 'info@shakespearepublishinghouse.com',
  'password'     => 'PASTE_THE_MAILBOX_PASSWORD_HERE', // single quotes required - the $ breaks double quotes
  'from_email'   => 'info@shakespearepublishinghouse.com',
  'from_name'    => 'Shakespeare Publishing House Website',
  'to_email'     => 'info@shakespearepublishinghouse.com',
];
