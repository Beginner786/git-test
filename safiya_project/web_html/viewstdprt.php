<?php
include("db_connect.php");
include("header.php");

echo "<div align=\"left\">
					<a href=\"stdprt.php\" style=\"text-decoration:none;color:white;\">Add Student</a>
					</div>
					<div align=\"center\">
					<a href=\"viewprt.php\" style=\"text-decoration:none;color:white;\">View Parent</a>
					</div>
					<div align=\"right\">	
					<a href=\"factdata.php\" style=\"text-decoration:none;color:white;\">Back</a>
					</div>";
					echo "<form method=\"post\" action=\"view.php\">
<font color=\"white\" style=\"font-family:georgia;\">sem:<input type=\"number\" name=\"sem\" max=\"6\" required></font>
<input type=\"submit\" name=\"view\" value=\"view\"></form>";


?>