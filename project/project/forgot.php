<html>
<head><title>Alumni Portal</title></head>
<body>
 <link rel="stylesheet" type="text/css" href="/project/project/css.css">

<?php
session_start();
include("header.php");
include("db_connect.php");
require("src/sendmail.php");
?>
<div>
<form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>"  >
<span> Email: </span><br>
<input type="email" placeholder="Email.." name="mail"  required>
<input type="submit" name="submit" value="submit">
</form>
<div>
<?php 
if(isset($_POST["submit"]))
{
	$user_email = $_POST["mail"];
		$q = mysqli_query($con,"select * from users where user_email='".$user_email."';");
		if(mysqli_num_rows($q) >0)
		{	$row = mysqli_fetch_assoc($q);
			$u_name = $row["user_fname"]." ".$row["user_lname"];
			mailTo($row["user_email"],"forgot_pass",$u_name);
		}
		else
		{
			echo "<h1> There is no account associated with your email</h1><br><h3> Register to get an account </h3>";
		}
}
?>
</body>
</html>




