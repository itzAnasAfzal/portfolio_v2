<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'anasafzalg85@gmail.com'; // Replace with your email
    $mail->Password   = 'fjrpfzncqymakndc'; // Use App Password (not your actual password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('manasafzal1122@gmail.com', 'web client');
    $mail->addAddress('anasafzalg85@gmail.com', 'Recipient Name');

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message';
    $mail->Body    = 'This is a test message from your PHP mail script.';

    $mail->send();
    echo '✅ Message sent successfully!';
} catch (Exception $e) {
    echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>