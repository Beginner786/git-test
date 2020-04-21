<?php
include("db_connect.php");
include("header.php");
session_start();
$name=$_POST["mark"];

$query="insert into attendance values('".$_SESSION["semval"]."',CURRENT_TIMESTAMP,'".  $insert_data = implode(",", $name) ."','".$_SESSION["facun"]."');";

if(!(mysqli_query($con,$query)))
{
$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Something went wrong!!! contact ADMIN!!!');window.location.replace('/safiya_project/web_html/mrkatt.php');</script>";
	}
	else
	{
		echo mysqli_error($con);
		
	}
}

else
{
	echo "<script>alert('Attendance Marked successfully for ".count($name)." students');window.location.replace('/safiya_project/web_html/mrkatt.php');</script>";
}

?>