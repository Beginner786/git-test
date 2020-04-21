<html>
<body>
<?php 
session_start();
htmlentities($s = $_GET["s"]);
$s_val = $_SESSION["val"]; 
if($s_val != 1 )
{	
	switch($s)
	{
		case "home":	
			echo "<script>window.location.replace(\"/project/project/home.php \");</script>";
			break;
		case "f_s":
			echo "<script>window.location.replace(\"/project/project/staff.php \");</script>";
			break;
		case "gallery":
			echo "<script>window.location.replace(\"/project/project/boost.php\");</script>";
			break;
		case "donors":
			echo "<script>window.location.replace(\"/project/project/donors.php \");</script>";
			break;
		case "about":
			echo "<script>window.location.replace(\"/project/project/about.php \");</script>";
			break;
		case "reg":
			echo "<script>window.location.replace(\"/project/project/register.php \");</script>";
			break;
		case "forgot_pass":
			echo "<script>window.location.replace(\"/project/project/forgot.php \");</script>";
			break;
		
		default:
			echo "Invalid request";
	
	}
}
elseif($s_val == 1 && $_SESSION["role"] == 1 )
{
	switch($s)
	{
		case "home":	
			echo "<script>window.location.replace(\"/project/project/home_logged.php \");</script>";
			break;
		case "f_s":
			echo "<script>window.location.replace(\"/project/project/staff.php \");</script>";
			break;
		case "gallery":
			echo "<script>window.location.replace(\"/project/project/boost.php \");</script>";
			break;
		case "donors":
			echo "<script>window.location.replace(\"/project/project/donors.php \");</script>";
			break;
		case "about":
			echo "<script>window.location.replace(\"/project/project/about.php \");</script>";
			break;
		case "reg":
			echo "<script>window.location.replace(\"/project/project/register.php \");</script>";
			break;
			case "alumnes":
			echo "<script>window.location.replace(\"/project/project/aluminies.php\");</script>";
			break;
		default:
			echo "Invalid request";
	
	}
	
	
}
elseif($s_val == 1 && $_SESSION["role"] == 2 )
{
	switch($s)
	{
		case "home":	
			echo "<script>window.location.replace(\"/project/project/home_logged.php \");</script>";
			break;
		case "f_s":
			echo "<script>window.location.replace(\"/project/project/staff.php \");</script>";
			break;
		case "gallery":
			echo "<script>window.location.replace(\"/project/project/boost.php \");</script>";
			break;
		case "donors":
			echo "<script>window.location.replace(\"/project/project/donors.php \");</script>";
			break;
		case "about":
			echo "<script>window.location.replace(\"/project/project/about.php \");</script>";
			break;
		case "reg":
			echo "<script>window.location.replace(\"/project/project/register.php \");</script>";
			break;
			case "newsup":
			echo "<script>window.location.replace(\"/project/project/newsup.php\");</script>";
			break;
		case "alumnes":
			echo "<script>window.location.replace(\"/project/project/aluminies.php\");</script>";
			break;
		case "ga_up":
			echo "<script>window.location.replace(\"/project/project/galleryup.php\");</script>";
			break;

		default:
			echo "Invalid request";
	
	}
	
	
}
	
?>
</body>
</html>