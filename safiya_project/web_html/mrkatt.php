<?php
include("db_connect.php");
include("header.php");
echo "<style>
td{
	color:white;
	
}
tr{
	color:yellow;
}

</style>";
echo"<center>
          <a href=\"factdata.php\" style=\"text-decoration:none;color:white;\">Back</a><center><br/><br/><br/>
<form method=\"post\" action=\"mrk2.php\">
<font color=\"white\" style=\"font-family:georgia;\">sem:<input type=\"number\" name=\"sem\" min=\"1\" max=\"6\" required></font>
<input type=\"submit\" name=\"mrk2\" value=\"mark\"></form>";
?>