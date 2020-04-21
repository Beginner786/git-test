<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";
$mm = 'koyined@polyswarms.com';
mailTo($mm);
function mailTO($to_mail)
{
$mail = new PHPMailer;
$mail->isSMTP();

$mail->SMTPDebug = 0;
$mail->Host = "smtp.gmail.com";

$mail->Port = 587;

$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->Username="alumniportalby2k16@gmail.com";
$mail->Password = "AlumniPortal@gpt";
$mail->setFrom("alumniportalby2k16@gmail.com","ALUMNI PORTAL"); 
$mail->addReplyTo("alumniportalby2k16@gmail.com","ALUMNI PORTAL");
$mail->isHTML(true);
$mail->Subject = "ALUMNI PORTAL";
//$mail->Body = "<font style=\"font-family:Times New Roman;\">Sir,<br> We are developing an ALUMINI PORTAL and this will be live soon...<br>Thanks for supporting us and helping for gathering all the information required in developing the website...<br><br><p>As a request we need your response to this mail and please attach your passport photo , in order to validate your e-mail ID.<p><br>FROM:<br>ALUMINI PORTAL DEVELOPMENT TEAM,<br>PROJECT GROUP-I  SHIFT-II, <br>VIGHNESH GHANTASALA:16001-CM-222<br>MOHAMMED ABDUL YOUSUF BAIG:16001-CM-239<br>PAVAN KUMAR:16001-CM-210<br>SHAIK SHOAIB AKTHER:16001-CM-250<br>MURALI NAYAK:16001-CM-217 .</font>";
$mail->Body = "This is a test mail";
$mail->addAddress($to_mail);

if(!($mail->send()))
{
	echo "error  ". $mail->ErrorInfo;
}
else
{
	echo "Messsage Sent";
	
}
}
?>