<?php
include("db_connect.php");
include("header.php");
$name=$_POST["name"];
$id=$_POST["id"];
$incharge=$_POST["inco"];
$clg=$_POST["clg"];
$pno=$_POST["phno"];
$mailid=$_POST["mail"];
$add=$_POST["adds"];
$pass=$_POST["pass"];
$query="insert into faculty values('".$id."','".$name."','".$incharge."','".$clg."','".$pno."','".$mailid."','".$add."','".$pass."');";

if(!(mysqli_query($con,$query)))
{
$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Seems an user with given id or email already exists');window.location.replace('/safiya_project/web_html/fact1.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
}

else
{
	echo "<script>alert('Registration Successful');window.location.replace('/safiya_project/web_html/fact1.php');</script>";
}

?>