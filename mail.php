<?php
require 'PHP_Mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               

$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = '';                 
$mail->Password = '';                           
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('', '');
$mail->addAddress('', '');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'The Information provided ';
$mail->Body    = 'Name:'.$txt_name.'<br>'.'Email ID:'.$txt_email.'<br>'.'Comments:'.$txt_comment;
$mail->AltBody = 'This is the query made by this vistor of the site';
?>
