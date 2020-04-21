<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";
//$mm = 'yousufbaig2001@hotmail.com';
//mailTo($mm);
include("db_connect.php");
$query = mysqli_query($con,"select * from users where status=2 and role_id=2;");
$num_rows = mysqli_num_rows($query);
//echo $num_rows;
if($num_rows > 0)
{
	while( $row = mysqli_fetch_assoc($query) )
	{
		echo "Sending message to :".$row["user_email"]."  ";
		mailTo($row["user_email"]);	
		echo "<br>";
	}
	
}
function mailTo($to_mail)
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

$mail->setFrom("alumniportalby2k16@gmail.com","AlumniPortal"); 
$mail->addReplyTo("alumniportalby2k16@gmail.com","AlumniPortal");
//$mail->Subject = "News Update";
$mail->isHTML(true);
$mail->Subject = "ALUMNI PORTAL";
$mail->Body = "<font style=\"font-family:lexia;\">Sir,<br> We are developing an ALUMINI PORTAL and this will be live soon...<br>Thanks for supporting us and helping for gathering all the information required in developing the website...<br><br><p>As a request we need your response to this mail and please attach your passport photo , in order to validate your e-mail ID.<p><br><h3 color ='red'> Note: This is an automated mail, So if found any errors we require a feedback to troubleshoot. </h3><br><u>FROM:</u><br>ALUMINI PORTAL DEVELOPMENT TEAM,<br>PROJECT GROUP-I  SHIFT-II, <br>VIGHNESH GHANTASALA:<b>16001-CM-222</b><br>MOHAMMED ABDUL YOUSUF BAIG:<b>16001-CM-239</b><br>PAVAN KUMAR:<b>16001-CM-210</b><br>SHAIK SHOAIB AKTHER:<b>16001-CM-250</b><br>MURALI NAYAK:<b>16001-CM-217</b> .<br><b> GOVERNMENT POLYTECHNIC MASAB-TANK, HYDERABAD. </b></font>  ";
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