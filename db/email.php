<?php
if (!isset($_POST['submit'])) {
    header("Location: contactMe.php");
}
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aigarci6coding@gmail.com';                     //SMTP username
    $mail->Password   = 'vsysngoalgtnlwaa';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('aigarci6coding@gmail.com', 'Coder');
    $mail->addAddress('itsai500@gmail.com', 'Reciever');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //this lets you add additional recipients
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content

    $body = "First name: ".$_POST['firstName']." <br>Last name: ".$_POST['lastName']." <br>Email: ".$_POST['email']." <br>Organization: ".$_POST['org']." <br>Comments: ".$_POST['additionalInfo'];
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'ePortfolio Contact';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();

    echo 'Message has been sent';
    header("Location: ../contactMe.php?success=1");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: ../contactMe.php?success=0");
}
?>