<?php
include("db_connect.php");
include("header.php");
$mail=$_POST["pin"];
if(isset($_POST['remove']))
{
	$query="select * from fac_notice where notid='".$mail."';";
$check = mysqli_query($con,$query);
if(mysqli_num_rows($check) == 1)
{
	$query="delete from fac_notice where notid='".$mail."';";
	if(mysqli_query($con,$query))
	{
echo "<script>alert('Notice removed successfully!!'); </script>"; 
echo "<script>window.location.replace(\"/safiya_project/web_html/delnc.php \");</script>";
	}
}
else
{
	echo "<script>alert('Notice id not found !!!'); </script>"; 
echo "<script>window.location.replace(\"/safiya_project/web_html/delnc.php \");</script>";
}
}

?>