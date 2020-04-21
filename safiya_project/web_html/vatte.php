<?php
include("db_connect.php");
include("header.php");echo"
<div align=\"center\">
<a href=\"factdata.php\" style=\"text-decoration:none;color:white;\">Back</a>
</div>";
echo "<form method=\"post\" action=\"vatt.php\">
<font color=\"white\" style=\"font-family:georgia;\">
SEM:<input type=\"number\" max=\"6\" min=\"1\" name=\"ssem\" required><br/><br/>
PIN:<input type=\"text\" name=\"spin\"><br/><br/>
</font>
<input type=\"submit\" name=\"Gete\" value=\"Get Attendance\">";



?>