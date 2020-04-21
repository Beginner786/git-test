<html>
<body class="header" background="wallpaper.png">
<?php include("header.php"); ?>
<center>
<link rel="stylesheet" type="text/css" href="css.css">
<div align="center" style="max-width:30%">
<h1 style="font-family:Lexia;">Student Login</h1><br/><br/>
<form method="post" target="content" action="stdverify.php">

<font size="4" style="font-family:Lexia;">PIN:</font>
<input id="uname" name="pin" type="text" size="15" required><br/><br/><br/>

<font size="4" style="font-family:Lexia;">SEM:</font>
<input id="sem" name="sem" type="text" size="15" min="1" maxlength="1" required><br/><br/><br/>

<font size="4" style="font-family:Lexia;">Password:</font>
<input id="pass" name="pass" type="password" size="15" required><br/><br/><br/>

<button type="submit" class="button" style="align:middle" ><span>log in </span></button>
</form></div></center>
</html>