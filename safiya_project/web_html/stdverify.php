<?php
include("db_connect.php");

include("header.php");
$un=$_POST["pin"];
$sem=$_POST["sem"];

session_start();
 $_SESSION['stdun'] = $un;
 $_SESSION['stsem'] = $sem;

$p=$_POST["pass"];

if($sem==1)
{
	$query="select * from  student where pin='".$un."' and password='".$p."'";
	$check = mysqli_query($con,$query);
	if(mysqli_num_rows($check) == 1)
	{
	
		$row = mysqli_fetch_assoc($check);
		echo "<script> alert('logged in successfully!') </script>";
		$query = "select name,pin,mailid from student;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			echo "<script>window.location.replace(\"/safiya_project/web_html/stddata.php \");</script>";
	
		}
	}
	else
	{	 
		echo "<script>alert('pin or sem or Password incorrect'); </script>"; 
		echo "<script>window.location.replace(\"/safiya_project/web_html/student1.php \");</script>";
	}
}


if($sem==2)
{
	$query="select * from  student2 where pin='".$un."' and password='".$p."'";
	$check = mysqli_query($con,$query);
	if(mysqli_num_rows($check) == 1)
	{
	
		$row = mysqli_fetch_assoc($check);
		echo "<script> alert('logged in successfully!') </script>";
		$query = "select name,pin,mailid from student2;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			echo "<script>window.location.replace(\"/safiya_project/web_html/stddata.php \");</script>";
	
		}
	}
	else
	{	 
		echo "<script>alert('pin or sem or Password incorrect'); </script>"; 
		echo "<script>window.location.replace(\"/safiya_project/web_html/student1.php \");</script>";
	}
}


if($sem==3)
{
	$query="select * from  student3 where pin='".$un."' and password='".$p."'";
	$check = mysqli_query($con,$query);
	if(mysqli_num_rows($check) == 1)
	{
	
		$row = mysqli_fetch_assoc($check);
		echo "<script> alert('logged in successfully!') </script>";
		$query = "select name,pin,mailid from student3;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			echo "<script>window.location.replace(\"/safiya_project/web_html/stddata.php \");</script>";
	
		}
	}
	else
	{	 
		echo "<script>alert('pin or sem or Password incorrect'); </script>"; 
		echo "<script>window.location.replace(\"/safiya_project/web_html/student1.php \");</script>";
	}
}

if($sem==4)
{
	$query="select * from  student4 where pin='".$un."' and password='".$p."'";
	$check = mysqli_query($con,$query);
	if(mysqli_num_rows($check) == 1)
	{
	
		$row = mysqli_fetch_assoc($check);
		echo "<script> alert('logged in successfully!') </script>";
		$query = "select name,pin,mailid from student4;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			echo "<script>window.location.replace(\"/safiya_project/web_html/stddata.php \");</script>";
	
		}
	}
	else
	{	 
		echo "<script>alert('pin or sem or Password incorrect'); </script>"; 
		echo "<script>window.location.replace(\"/safiya_project/web_html/student1.php \");</script>";
	}
}


if($sem==5)
{
	$query="select * from  student5 where pin='".$un."' and password='".$p."'";
	$check = mysqli_query($con,$query);
	if(mysqli_num_rows($check) == 1)
	{
	
		$row = mysqli_fetch_assoc($check);
		echo "<script> alert('logged in successfully!') </script>";
		$query = "select name,pin,mailid from student5;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			echo "<script>window.location.replace(\"/safiya_project/web_html/stddata.php \");</script>";
	
		}
	}
	else
	{	 
		echo "<script>alert('pin or sem or Password incorrect'); </script>"; 
		echo "<script>window.location.replace(\"/safiya_project/web_html/student1.php \");</script>";
	}
}



if($sem==6)
{
	$query="select * from  student6 where pin='".$un."' and password='".$p."'";
	$check = mysqli_query($con,$query);
	if(mysqli_num_rows($check) == 1)
	{
	
		$row = mysqli_fetch_assoc($check);
		echo "<script> alert('logged in successfully!') </script>";
		$query = "select name,pin,mailid from student6;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			echo "<script>window.location.replace(\"/safiya_project/web_html/stddata.php \");</script>";
	
		}
	}
	else
	{	 
		echo "<script>alert('pin or sem or Password incorrect'); </script>"; 
		echo "<script>window.location.replace(\"/safiya_project/web_html/student1.php \");</script>";
	}
}
	
?>