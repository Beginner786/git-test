<?php
include("db_connect.php");
include("header.php");
$name=$_POST["name"];
$spin=$_POST["spin"];
$ssem=$_POST["ssem"];
$phno=$_POST["phno"];
$email=$_POST["mail"];
$pass=$_POST["pass"];
$query="insert into parent values('".$name."','".$spin."','".$ssem."','".$phno."','".$email."','".$pass."');";

if(!(mysqli_query($con,$query)))
{
$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Seems a parent with given email already exists');window.location.replace('/safiya_project/web_html/addpr.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
}

else
{
	echo "<script>alert('Registration Successful');window.location.replace('/safiya_project/web_html/addpr.php');</script>";
}

?>