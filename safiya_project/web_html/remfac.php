<?php
include("db_connect.php");
include("header.php");
$mail=$_POST["email"];
if(isset($_POST['remove']))
{
	$query="select * from faculty where mailid='".$mail."';";
$check = mysqli_query($con,$query);
if(mysqli_num_rows($check) == 1)
{
	$query="delete from faculty where mailid='".$mail."';";
	if(mysqli_query($con,$query))
	{
echo "<script>alert('facutly removed successfully!!'); </script>"; 
echo "<script>window.location.replace(\"/safiya_project/web_html/delfact.php \");</script>";
	}
}
else
{
	echo "<script>alert('faculty mail id not found !!!'); </script>"; 
echo "<script>window.location.replace(\"/safiya_project/web_html/delfact.php \");</script>";
}
}

?>