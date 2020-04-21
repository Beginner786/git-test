<html>
<body>

<?php

#validating credentials
session_start();
include("db_connect.php");
require("src/sendmail.php");
$_SESSION["val"];
$email = $_POST["email"];
$pass = hash('md5',$_POST["password"]);

//$pass_hash = hash('md5',$pass);
$user="select * from  users where user_email='".$email."' and password='".$pass."' and status=2";
$authentic = mysqli_query($con,$user);
if(mysqli_num_rows($authentic) == 1)
{
	
	$row = mysqli_fetch_assoc($authentic);
	if($row["user_id"] > 0)
	{
	//	echo "<iframe href=\" \" height=\"100%\"  width=\"100%\" ></iframe>";
	$_SESSION["id"] = $row["user_id"];
	$_SESSION["val"] = 1;
	$_SESSION["role"] = $row["role_id"];
	$u_name = $row["user_fname"].$row["user_lname"];
	mailTo($row["user_email"],"login",$u_name);
	echo "<script>window.location.replace(\"/project/project/home_logged.php \");</script>";

	}
	

	echo "<script> alert('you will be logged out on closing this window') </script>";
}
else{ echo "<script>alert('Username or Password incorrect'); window.location.replace('/project/project/home.php') </script>"; }
#------------------------------------------------



?>
</body>
</html>