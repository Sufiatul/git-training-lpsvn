<?php
/**
 * mail.php
 *
 * Sends an email using PHP's built-in mail() function
 *
 * @param string $to      The recipient's email address
 * @param string $subject The email subject
 * @param string $body    The email body
 */

function sendMail($to, $subject, $body) {
  $headers = 'From: Your Name <your-email@example.com>' . "\r\n";
  $headers .= 'Reply-To: your-email@example.com' . "\r\n";
  $headers .= 'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $body, $headers);
}

// Example usage:
$to = 'recipient@example.com';
$subject = 'Test Email';
$body = 'This is a test email sent from mail.php';

sendMail($to, $subject, $body);