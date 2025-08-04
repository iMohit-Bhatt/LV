<?php
// Simple email test script
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load PHPMailer files
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your email@gmail.com'; #change this for email send functionality
    $mail->Password   = 'your app pass word';  #change this for email send functionality
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->SMTPDebug  = 2; // Enable verbose debug output

    //Recipients
    $mail->setFrom('your email@gmail.com', 'Ekansh Realty'); #change this for email send functionality
    $mail->addAddress('your email@gmail.com', 'Test Recipient'); #change this for email send functionality

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Email Test from Contact Form';
    $mail->Body    = '<h1>Test Email</h1><p>If you receive this email, your email configuration is working correctly.</p>';

    $mail->send();
    echo 'Test email sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}<br>";
    echo "Exception: " . $e->getMessage();
}
?>