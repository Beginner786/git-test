<?php
include("db_connect.php");
include("header.php");
$type=$_POST["type"];
$sub=$_POST["sub"];
$desc=$_POST["desc"];
session_start();
$query="insert into prtfdbk(type,subject,description) values('".$type."','".$sub."','".$desc."');";

if(mysqli_query($con,$query))
{
 echo "<script>alert('Thanks for giving Feedback');window.location.replace('/safiya_project/web_html/gfdbk.php');</script>";
}

else
{
	echo "<script>alert('Error');window.location.replace('/safiya_project/web_html/gfdbk.php');</script>";
}

?>