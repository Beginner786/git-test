<?php
include("db_connect.php");

include("header.php");

$query = "select username,email from admin;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows >0)
		{   
			$row = mysqli_fetch_assoc($result);
			
					echo "<div align=\"left\">
					<a href=\"fact1.php\" style=\"text-decoration:none;color:white;\">Add Faculty</a>
					</div>
					<div align=\"center\">
					<a href=\"delfact.php\" style=\"text-decoration:none;color:white;\">Remove Faculty</a></div>
					<div align=\"right\">	
					<a href=\"vfact.php\" style=\"text-decoration:none;color:white;\">View Faculty</a>
					</div>";
					echo "<br><center>";
					echo "<hr><font style=\"font-family:Lexia;color:red;size=10;\">".$row["username"]." &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp ";
					
					//echo "  <img src=\"masab tank college.jpg\" style=\"width: 100%; display: none;\" align=\"middle\">";
					
					echo $row["email"]."&nbsp&nbsp&nbsp&nbsp  |   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font><hr>";
					echo "<form name=\"logout\" action=".htmlentities($_SERVER['PHP_SELF'])." method=\"post\" /> 
					<input type=\"submit\" name=\"logout\" value=\"Logout\" /></form>";
					echo "<br>";
					if(isset($_REQUEST["logout"]))
					{
						#session_destroy();
						echo "<script> window.location.replace(\" /safiya_project/web_html/home.php \") </script> ";
	
}
			
					
		}
		


?>