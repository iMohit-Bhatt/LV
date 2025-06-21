﻿<?php

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

  if(isset($_POST['send']))
  {
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];

    //Load Composer's autoloader
    require '../PHPMailer\Exception.php';
    require '../PHPMailer\PHPMailer.php';
    require '../PHPMailer\SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'designerr396@gmail.com';                     //SMTP username
        $mail->Password   = 'sjli jhos ckej dbqu';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('designerr396@gmail.com', 'Contact Form - Test');
        $mail->addAddress('designer.ram123@gmail.com', 'Designer Ram');


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Test Contact Form';
        $mail->Body    = "Sender Name: $name <br/> Sender Email: $email <br/> Message: $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "<meta http-equiv='refresh' content='0'>";
  }
?>