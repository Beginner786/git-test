
<?php 
$con = mysqli_connect("localhost","root","","keyword" );

if(mysqli_connect_error())
{
	die("Failed to connect");
	
}



mysqli_select_db($con,"keyword");
#--------------------------------------
$key1 = $_POST["search"]; 
$query = "select LOWER ('keyword') from content where keyword='".$key1."'";
$authentic = mysqli_query($con,$query);
if(mysqli_num_rows($authentic) == 1)
{
//$row = mysqli_fetch_assoc($authentic);
  // echo "Data exists";
	$key1=strtolower($key1);
		if($key1=="amox")
		{
		 include 'amox1.html';	
		}
		if($key1=="cetirizine")
		{
			include 'cetirizine1.html';
		}
		if($key1=="ciplox eye drops")
		{
			include 'ciploxed1.html';
		}
		if($key1=="ciplox oz")
		{
			include 'ciploxoz1.html';
		}
		if($key1=="ambcet cold")
		{
			include 'ambcetc1.html';
		}
		if($key1=="dolo")
		{
			include "dolo1.html";
		}
		
	
}
else
{
	echo "<script>alert('Data does not exist');window.location.replace('/group8.1/main.php');</script>";
}

?>
