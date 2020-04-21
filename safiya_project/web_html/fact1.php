<!--fact1.html-->
<html>
<link rel="stylesheet" type="text/css" href="register.css">
<style>
textarea
{
resize:none;
width:50%;
    padding: 1%;
    margin: 1% 0 2% 0;
    border: none;
    background: #f1f1f1;
}</style>

<body>

<?php

include("header.php");

?>
<center>
<div>
					<div align="left">
					<a href="data.php" style="text-decoration:none;color:white;">back</a>
					</div>
					<div align="right">	
					<a href="vfact.php" style="text-decoration:none;color:white;">View Faculty</a>
					</div></div>
					<hr>
<form action="regfact.php" method="post">
<font color="white" style="font-family:lexia;">Name:<center><input name="name" type="text" min="1" max="15" required></center><br/><br/>
ID:<center><input name="id" type="text" min="1" max="3" required></center><br/><br/>
Incharge of class:<center><input name="inco" type="text" min="1" max="20" required></center><br/><br/>
College:<center><input name="clg" type="text" min="1" max="30" required></center><br/><br/>
Phone no:<center><input name="phno" type="text" min="10" max="10" required></center><br/><br/>
Email id:<center><input name="mail" type="email" min="1" max="40" required></center><br/><br/>
Password:<center><input name="pass" type="password" min="" max="15" required></center><br/><br/>
Address:<br>	
<textarea name="adds" rows="6" cols="100" min="1"></textarea><br/><br/>
<button type="submit"  name="submit" class="registerbtn">Register</button>
 

 </form>
</center>
</body>
</html>