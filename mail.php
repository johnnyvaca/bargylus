<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //<s   Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username = 'projetbargylus@gmail.com';                     // SMTP username
    $mail->Password = 'BargylusPa$$w0rd';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('rh@outlook.com', 'Equipe Outlook');
    $mail->addAddress('johnny.vaca-jaramillo@cpnv.ch', 'Johnny Vaca');     // Add a recipient


    // $mail->addReplyTo('info@example.com', 'Information');
    //   $mail->addCC('cc@example.com');
    //  $mail->addBCC('bcc@example.com');

    // Attachments
    //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'FELICITATION!!!';
    $mail->Body = '
<b>vous avez gagner 5\'000 CHF veuillez cliquer sur ce lien
<a href="http://bargylus.mycpnv.ch/index.php?action=blague">CLIQUER ICI</a>
 </b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}