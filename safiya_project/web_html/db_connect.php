<?php
#Server connection
$con = mysqli_connect("localhost","root","");
if(mysqli_connect_error())
{
die("Unable to connect".mysqli_connect_error());
}
#database
mysqli_select_db($con,"attendance");

?>