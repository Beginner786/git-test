<?php
include("db_connect.php");
include("header.php");
$noid=$_POST["id"];
$sem=$_POST["sem"];
$le=$_POST["txt"];
$desc=$_POST["desc"];
//$by=$_POST["by"];
session_start();
//$query="insert into fac_notice values('".$noid."','".$sem."','".$le."','".$desc."','".$by."');";
$query="insert into fac_notice values(CURRENT_TIMESTAMP,'".$noid."','".$sem."','".$le."','".$desc."','".$_SESSION["facun"]."');";

if(!(mysqli_query($con,$query)))
{
$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Seems as notice with given Notice ID already exists');window.location.replace('/safiya_project/web_html/updntc.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
}

else
{
	echo "<script>alert('Notice Uploaded Successfully');window.location.replace('/safiya_project/web_html/updntc.php');</script>";
}

?>