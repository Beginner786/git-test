<?php

include("db_connect.php");
$q = mysqli_num_rows(mysqli_query($con,"select password from users where user_email='vignesh.ghantasala@gmail.com';"));
echo $q;
if(!$q)
{
	echo mysqli_error($con);	
}
else
{
	echo "Success";
	
}
?>