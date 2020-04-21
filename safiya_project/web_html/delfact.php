<?php
include("db_connect.php");
include("header.php");echo"
<div align=\"center\">
<a href=\"data.php\" style=\"text-decoration:none;color:white;\">Back</a>
</div>";
echo "<form method=\"post\" action=\"remfac.php\">
<font color=\"white\" style=\"font-family:georgia;\">Mail id:<input type=\"email\" name=\"email\" required></font>
<input type=\"submit\" name=\"remove\" value=\"remove\">";



?>