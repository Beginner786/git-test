<?php
include("db_connect.php");
include("header.php");
$name=$_POST["pin"];
$sem=$_POST["sem"];


if($sem==1){
	$query="select * from student where pin='".$name."';";
	$check = mysqli_query($con,$query);
    if(mysqli_num_rows($check) == 1)
    {
	$query="delete from student where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
     echo "<script>alert('student removed successfully!!'); </script>"; 
    //echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	$query="select * from parent where pin='".$name."';";
	$check = mysqli_query($con,$query);
    if(mysqli_num_rows($check) == 1)
    {
	$query="delete from parent where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
     echo "<script>alert('parent removed successfully!!'); </script>"; 
    echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
}
//--------------------------	
	
else if($sem==2){
	$query="select * from student2 where pin='".$name."';";
		$check = mysqli_query($con,$query);
if(mysqli_num_rows($check) == 1)
{
	$query="delete from student2 where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
echo "<script>alert('student removed successfully!!'); </script>"; 
//echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	
	$query="select * from parent where pin='".$name."';";
	$check = mysqli_query($con,$query);
    if(mysqli_num_rows($check) == 1)
    {
	$query="delete from parent where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
     echo "<script>alert('parent removed successfully!!'); </script>"; 
    echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	
	
	}
//----------------------------	
else if($sem==3){
	$query="select * from student3 where pin='".$name."';";
		$check = mysqli_query($con,$query);
if(mysqli_num_rows($check) == 1)
{
	$query="delete from student3 where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
echo "<script>alert('student removed successfully!!'); </script>"; 
//echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	
	$query="select * from parent where pin='".$name."';";
	$check = mysqli_query($con,$query);
    if(mysqli_num_rows($check) == 1)
    {
	$query="delete from parent where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
     echo "<script>alert('parent removed successfully!!'); </script>"; 
    echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	
	}
//----------------------------------	
else if($sem==4){
	$query="select * from student4 where pin='".$name."';";
		$check = mysqli_query($con,$query);
if(mysqli_num_rows($check) == 1)
{
	$query="delete from student4 where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
echo "<script>alert('student removed successfully!!'); </script>"; 
//echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	
	$query="select * from parent where pin='".$name."';";
	$check = mysqli_query($con,$query);
    if(mysqli_num_rows($check) == 1)
    {
	$query="delete from parent where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
     echo "<script>alert('parent removed successfully!!'); </script>"; 
    echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	
	}
//------------------------------------------	
else if($sem==5){
	$query="select * from student5 where pin='".$name."';";
		$check = mysqli_query($con,$query);
 if(mysqli_num_rows($check) == 1)
{
	$query="delete from student5 where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
echo "<script>alert('student removed successfully!!'); </script>"; 
//echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	$query="select * from parent where pin='".$name."';";
	$check = mysqli_query($con,$query);
    if(mysqli_num_rows($check) == 1)
    {
	$query="delete from parent where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
     echo "<script>alert('parent removed successfully!!'); </script>"; 
    echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	}
//---------------------------------------------	
else if($sem==6){
	$query="select * from student6 where pin='".$name."';";
		$check = mysqli_query($con,$query);
 if(mysqli_num_rows($check) == 1)
{
	$query="delete from student6 where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
echo "<script>alert('student removed successfully!!'); </script>"; 
//echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	$query="select * from parent where pin='".$name."';";
	$check = mysqli_query($con,$query);
    if(mysqli_num_rows($check) == 1)
    {
	$query="delete from parent where pin='".$name."';";
	if(mysqli_query($con,$query))
	{
     echo "<script>alert('parent removed successfully!!'); </script>"; 
    echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
	}
	}
	
	}
	
//----------------------------------------------	

else
{
	echo "<script>alert('student pin not found !!!'); </script>"; 
echo "<script>window.location.replace(\"/safiya_project/web_html/delstd.php \");</script>";
}


?>