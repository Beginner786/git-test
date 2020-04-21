<?php
include("db_connect.php");

include("header.php");
session_start();
if($_SESSION['stsem']==1)
	{
$query = "select name,mailid from student where pin='".$_SESSION['stdun']."';" ;
}
if($_SESSION['stsem']==2)
	{
$query = "select name,mailid from student2 where pin='".$_SESSION['stdun']."';" ;
}
if($_SESSION['stsem']==3)
	{
$query = "select name,mailid from student3 where pin='".$_SESSION['stdun']."';" ;
}
if($_SESSION['stsem']==4)
	{
$query = "select name,mailid from student4 where pin='".$_SESSION['stdun']."';" ;
}
if($_SESSION['stsem']==5)
	{
$query = "select name,mailid from student5 where pin='".$_SESSION['stdun']."';" ;
}
if($_SESSION['stsem']==6)
	{
$query = "select name,mailid from student6 where pin='".$_SESSION['stdun']."';" ;
}
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			
					echo "<div align=\"left\">
					<a href=\"vatt2.php\" style=\"text-decoration:none;color:white;\">View Attendance</a>
					</div>
					<div align=\"center\">
					<a href=\"viewnc2.php\" style=\"text-decoration:none;color:white;\">View Notice</a></div>";
					
					echo "<br><center>";
					echo "<hr><font style=\"font-family:Lexia;color:red;size=10;\">".$row["name"]." &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp ";
					
					//echo "  <img src=\"masab tank college.jpg\" style=\"width: 100%; display: none;\" align=\"middle\">";
					
					echo $row["mailid"]."&nbsp&nbsp&nbsp&nbsp  |   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .$_SESSION['stdun']."</font><hr>";
					echo "<form name=\"logout\" action=".htmlentities($_SERVER['PHP_SELF'])." method=\"post\" /> 
					<input type=\"submit\" name=\"logout\" value=\"Logout\" /></form>";
					echo "<br>";
					if(isset($_REQUEST["logout"]))
					{
						session_destroy();
						//unset();
						echo "<script> window.location.replace(\" /safiya_project/web_html/home.php \") </script> ";
	
}
			
					
		}
		


?>