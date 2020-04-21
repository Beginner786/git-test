<?php
include("db_connect.php");
include("header.php");
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"register.css\"><style>
textarea
{
resize:none;
width:50%;
    padding: 1%;
    margin: 1% 0 2% 0;
    border: none;
    background: #f1f1f1;
}

font
{
	color:white;
}

</style>
<center>
<a href=\"factdata.php\" style=\"text-decoration:none;color:white;\">Back</a>

<form action=\"upc.php\" method=\"post\">
<font>Notice ID: <input type=\"text\" name=\"id\"><br/><br/>
Semester:<input type=\"text\" name=\"sem\"><br/><br/> 
Title: <input type=\"text\" name=\"txt\"><br/><br/>
Description:<br/><br/><textarea name=\"desc\" rows=\"6\" cols=\"100\" min=\"1\"></textarea><br/><br/> 
<!--by: <input type=\"text\" name=\"by\"><br/><br/>-->
<button type=\"submit\"  name=\"submit\" class=\"registerbtn\">Upload</button></font>
</form></center>

";


?>