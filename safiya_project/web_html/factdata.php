<?php
include("db_connect.php");

include("header.php");
session_start();
$query = "select name,mailid from faculty where name='".$_SESSION['facun']."';" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			
					echo "&nbsp
					<a href=\"stdprt.php\" style=\"text-decoration:none;color:white;\">Add student</a>&nbsp&nbsp&nbsp&nbsp
					<a href=\"viewstdprt.php\" style=\"text-decoration:none;color:white;\">View student and Parent</a>&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href=\"mrkatt.php\" style=\"text-decoration:none;color:white;\">Mark Attendance</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href=\"vatte.php\" style=\"text-decoration:none;color:white;\">View Attendance</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href=\"vfdbk.php\" style=\"text-decoration:none;color:white;\">View Feedback</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href=\"updntc.php\" style=\"text-decoration:none;color:white;\">Upload Notice</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href=\"delnc.php\" style=\"text-decoration:none;color:white;\">Delete Notice</a>&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href=\"viewnc.php\" style=\"text-decoration:none;color:white;\">View Notice</a>&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href=\"delstd.php\" style=\"text-decoration:none;color:white;\">Remove Student and Parent</a>";
					echo "<br><center>";
					echo "<hr><font style=\"font-family:Lexia;color:red;size=10;\">".$row["name"]." &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp ";
					
					//echo "  <img src=\"masab tank college.jpg\" style=\"width: 100%; display: none;\" align=\"middle\">";
					
					echo $row["mailid"]."&nbsp&nbsp&nbsp&nbsp  |   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font><hr>";
					echo "<form name=\"logout\" action=".htmlentities($_SERVER['PHP_SELF'])." method=\"post\" /> 
					<input type=\"submit\" name=\"logout\" value=\"Logout\" /></form>";
					echo "<br>";
					if(isset($_REQUEST["logout"]))
					{
						session_destroy();
						
						echo "<script> window.location.replace(\" /safiya_project/web_html/home.php \") </script> ";
	
}
			
					
		}
		


?>