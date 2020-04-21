<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require( "Exception.php");
require "PHPMailer.php";
require "SMTP.php";
//require("db_connect.php");

function mailTo($users_mail,$body_type,$uname)
{
$mail = new PHPMailer;

$mail->isSMTP();
//Mail authentication 
$mail->SMTPDebug = 0;
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->Username="alumniportalby2k16@gmail.com";
$mail->Password = "AlumniPortal@gpt";
//-----------------------------
//Email sender,reciever ,Body and sending 
$mail->setFrom("alumniportalby2k16@gmail.com","AlumniPortal"); 
$mail->addReplyTo("alumniportalby2k16@gmail.com","AlumniPortal");
//$mail->Body ='<h1>Hello Alumnie welcome to Our Portal </h1>';
switch($body_type)
{
	case 'new_user':
		$to_mail = $users_mail;
		$mail->Subject = " Welcome";
		$mail->isHtml(true);
		$mail->Body = '<h1> Welcome '.$uname.' to Alumni Portal</h1><br><h4> You may now Login to Alumni Portal</h4>';
		break;
	case 'login':
		$to_mail = $users_mail;
		$mail->Subject = "Login alert";
		$mail->isHtml(true);
		$mail->Body = '<h1> We have noticed a login from your email id</h1><br><span> if this wasnt you inform us </span> ';
		break;
	case 'forgot_pass':
		$con = mysqli_connect("localhost","root","");
		mysqli_select_db($con,"alum");
		$q = mysqli_query($con,"select * from users where user_email='".$users_mail."';");
		$to_mail = $users_mail;
		$mail->Subject = "New Password Request";
		$mail->isHtml(true);
		if(mysqli_num_rows($q) >0 )
		{	$row = mysqli_fetch_assoc($q);
			$mail->Body = '<p>We have recieved a password change request your password will be changed and reported back to you soon.<br>If this wasnt you report us as soon as you see this mail.<br>Thanks & Regards:<br> Alumni Portal Team</p> ';
		}
		else{echo "Invalid user";}
		break;
	default: echo "Invalid Request";
}//switch end
$mail->addAddress($to_mail);
if(!($mail->send()))
{	
	echo $to_mail."error  ". $mail->ErrorInfo;
}
else
{
	echo "Email Sent successfully ";
	
}

}//fn_end
?>