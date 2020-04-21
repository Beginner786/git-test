<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";

$mail = new PHPMailer;
$mail->isSMTP();

$mail->SMTPDebug = 0;
$mail->Host = "smtp.gmail.com";

$mail->Port = 587;

$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->Username="alumniportalby2k16@gmail.com";
$mail->Password = "AlumniPortal@gpt";

$mail->setFrom("alumniportalby2k16@gmail.com","AlumniPortal"); 
$mail->addReplyTo("alumniportalby2k16@gmail.com","AlumniPortal");
$mail->addAddress("vignesh.ghantasala@gmail.com");
$mail->Subject = "Test mail";
$mail->Body = "This is PHPMailer mail";
if(!($mail->send()))
{
	echo "error  ". $mail->ErrorInfo;
}
else
{
	echo "Messsage Sent";
	
}
?>