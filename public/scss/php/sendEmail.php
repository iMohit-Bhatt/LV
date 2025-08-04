<?php
    // Prevent any output before headers
    ob_start();
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

  if(isset($_POST['send']))
  {
    // Log form submission for debugging
    error_log("Contact form submitted with data: " . print_r($_POST, true));
    
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $whatsapp   = $_POST['whatsapp'] ?? '';
    $phone      = $_POST['phone'] ?? $_POST['number'] ?? '';
    $query      = $_POST['query'] ?? $_POST['subject'] ?? '';
    $job_title  = $_POST['job_title'] ?? '';
    $message    = $_POST['message'];

    //Load PHPMailer files
    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    // Function to send email
    function sendEmail($to, $toName, $subject, $body) {
        global $mail;
        
        $mail->clearAddresses();
        $mail->addAddress($to, $toName);
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        return $mail->send();
    }

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'your email@gmail.com';     #change this for email send functionality 
        $mail->Password   = 'your app pass word';      #change this for email send functionality
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPDebug  = 0;                                      //Enable verbose debug output (set to 2 for full debug)

        //Recipients
        $mail->setFrom('your email@gmail.com', 'Ekansh Realty'); #change this for email send functionality

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML

        // Email to Admin
        $adminSubject = 'New Contact Form Submission - Book Now';
        $adminBody = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>WhatsApp:</strong> $whatsapp</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Query:</strong> $query</p>
        <p><strong>Job Title:</strong> $job_title</p>
        <p><strong>Message:</strong> $message</p>
        <hr>
        <p><em>This message was sent from the Book Now form on your real estate website.</em></p>
        ";

        // Email to User
        $userSubject = 'Thank you for contacting Ekansh Realty';
        $userBody = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
            <div style='background: linear-gradient(135deg, #007bff, #0056b3); color: white; padding: 20px; text-align: center;'>
                <h1 style='margin: 0;'>Ekansh Realty</h1>
                <p style='margin: 10px 0 0 0;'>Symbol of Trust</p>
            </div>
            
            <div style='padding: 30px; background: #f8f9fa;'>
                <h2 style='color: #333; margin-bottom: 20px;'>Thank you for contacting us!</h2>
                
                <p style='color: #666; line-height: 1.6; margin-bottom: 20px;'>
                    Dear <strong>$name</strong>,
                </p>
                
                <p style='color: #666; line-height: 1.6; margin-bottom: 20px;'>
                    Thank you for reaching out to Ekansh Realty. We have received your inquiry and our team will contact you soon to assist you with your real estate needs.
                </p>
                
                <div style='background: white; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #007bff;'>
                    <h3 style='color: #007bff; margin-top: 0;'>Your Inquiry Details:</h3>
                    <p><strong>Query:</strong> $query</p>
                    <p><strong>Message:</strong> $message</p>
                </div>
                
                <p style='color: #666; line-height: 1.6; margin-bottom: 20px;'>
                    <strong>We will contact you soon</strong> at your provided contact information:
                </p>
                
                <ul style='color: #666; line-height: 1.6;'>
                    <li>Email: $email</li>
                    <li>Phone: $phone</li>
                    <li>WhatsApp: $whatsapp</li>
                </ul>
                
                <p style='color: #666; line-height: 1.6; margin-bottom: 20px;'>
                    In the meantime, feel free to explore our properties and services on our website.
                </p>
                
                <div style='text-align: center; margin: 30px 0;'>
                    <a href='http://localhost:8080' style='background: #007bff; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; display: inline-block;'>Visit Our Website</a>
                </div>
            </div>
            
            <div style='background: #333; color: white; padding: 20px; text-align: center;'>
                <p style='margin: 0;'><strong>Contact Information:</strong></p>
                <p style='margin: 5px 0;'>Phone: +91-7011420563, +91-8377818657</p>
                <p style='margin: 5px 0;'>Email: info@ekanshrealty.com</p>
                <p style='margin: 10px 0 0 0; font-size: 12px;'>© 2024 Ekansh Realty. All rights reserved.</p>
            </div>
        </div>
        ";

        // Send email to admin
        $adminResult = sendEmail('your email@gmail.com', 'Mohit Bhatt', $adminSubject, $adminBody); #change this for email send functionality
        
        // Send email to user
        $userResult = sendEmail($email, $name, $userSubject, $userBody);
        
        // Clear any output buffer
        ob_clean();
        
        if($adminResult && $userResult) {
            echo 'Message has been sent';
        } else {
            echo 'Message could not be sent. Admin result: ' . ($adminResult ? 'Success' : 'Failed') . 
                 ', User result: ' . ($userResult ? 'Success' : 'Failed');
        }
    } catch (Exception $e) {
        // Clear any output buffer
        ob_clean();
        // Log the error for debugging
        error_log("Email Error: " . $e->getMessage());
        echo "Message could not be sent. Mailer Error: " . $e->getMessage();
    }
    
    // End output buffering
    ob_end_flush();
    echo "<meta http-equiv='refresh' content='0'>";
  }
?>