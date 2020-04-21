<!--admin1.html-->
<html>
<body class="header" background="wallpaper.png">
<?php include("header.php"); ?>
<center>
<link rel="stylesheet" type="text/css" href="css.css">
<div align="center" style="max-width:30%">
<h1 style="font-family:Lexia;">Faculty Login</h1><br/><br/>
<form method="post" target="content" action="factverify.php">
<font size="4" style="font-family:Lexia;">Username:</font>
<input id="uname" name="uname" type="text" size="15" required><br/><br/><br/>
<font size="4" style="font-family:Lexia;">Password:</font>
<input id="pass" name="pass" type="password" size="15" required><br/><br/><br/>
<button type="submit" class="button" style="align:middle" ><span>log in </span></button>
</form></div></center>
</html>