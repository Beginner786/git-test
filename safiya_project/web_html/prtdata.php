<?php
include("db_connect.php");

include("header.php");
session_start();
$query = "select name,email,ssem,pin from parent where name='".$_SESSION['prun']."';" ;

		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			$_SESSION["pssem"]=$row["ssem"];
			$_SESSION["pspin"]=$row["pin"];
					echo "<div align=\"left\">
					<a href=\"vatt3.php\" style=\"text-decoration:none;color:white;\">View Attendance</a>
					</div>
					<div align=\"center\">
					<a href=\"viewnc1.php\" style=\"text-decoration:none;color:white;\">View Notice</a></div>
					<div align=\"right\">	
					<a href=\"gfdbk.php\" style=\"text-decoration:none;color:white;\">Give feedback</a>
					</div>";
					echo "<br><center>";
					echo "<hr><font style=\"font-family:Lexia;color:red;size=10;\">".$row["name"]." &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp ";
					
					//echo "  <img src=\"masab tank college.jpg\" style=\"width: 100%; display: none;\" align=\"middle\">";
					
					echo $row["email"]."&nbsp&nbsp&nbsp&nbsp  |   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font><hr>";
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