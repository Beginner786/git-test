<?php
include("db_connect.php");

include("header.php");
$un=$_POST["uname"];

session_start();
 $_SESSION['facun'] = $un;

$p=$_POST["pass"];
$query="select * from  faculty where name='".$un."' and password='".$p."'";
$check = mysqli_query($con,$query);
if(mysqli_num_rows($check) == 1)
{
	
	$row = mysqli_fetch_assoc($check);
	echo "<script> alert('logged in successfully!') </script>";
	$query = "select name,mailid from faculty;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			echo "<script>window.location.replace(\"/safiya_project/web_html/factdata.php \");</script>";
	
	}
	}
else{ echo "<script>alert('name or Password incorrect'); </script>"; 
echo "<script>window.location.replace(\"/safiya_project/web_html/faculty1.php \");</script>";
	}
?>