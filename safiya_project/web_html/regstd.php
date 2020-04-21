<?php
include("db_connect.php");
include("header.php");
$name=$_POST["name"];
$pin=$_POST["pin"];
$prname=$_POST["pname"];
$branch=$_POST["branch"];
$yrs=$_POST["yrs"];
$clg=$_POST["clg"];
$pno=$_POST["phno"];
$mailid=$_POST["mail"];
$pass=$_POST["pass"];
$add=$_POST["adds"];
if($yrs==1)
{	
$query="insert into student values('".$name."','".$pin."','".$prname."','".$branch."','".$yrs."','".$clg."','".$pno."','".$mailid."','".$pass."','".$add."');";
}
if($yrs==2)
{	
$query="insert into student2 values('".$name."','".$pin."','".$prname."','".$branch."','".$yrs."','".$clg."','".$pno."','".$mailid."','".$pass."','".$add."');";
}
if($yrs==3)
{	
$query="insert into student3 values('".$name."','".$pin."','".$prname."','".$branch."','".$yrs."','".$clg."','".$pno."','".$mailid."','".$pass."','".$add."');";
}
if($yrs==4)
{	
$query="insert into student4 values('".$name."','".$pin."','".$prname."','".$branch."','".$yrs."','".$clg."','".$pno."','".$mailid."','".$pass."','".$add."');";
}
if($yrs==5)
{	
$query="insert into student5 values('".$name."','".$pin."','".$prname."','".$branch."','".$yrs."','".$clg."','".$pno."','".$mailid."','".$pass."','".$add."');";
}
if($yrs==6)
{	
$query="insert into student6 values('".$name."','".$pin."','".$prname."','".$branch."','".$yrs."','".$clg."','".$pno."','".$mailid."','".$pass."','".$add."');";
}


if(!(mysqli_query($con,$query)))
{
$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Seems an user with given id or email already exists');window.location.replace('/safiya_project/web_html/stdprt.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
}

else
{
	echo "<script>alert('Registration Successful');window.location.replace('/safiya_project/web_html/stdprt.php');</script>";
}

?>