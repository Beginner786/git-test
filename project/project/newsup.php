<html>
<head>
<title>Alumni Portal</title>
<?php
session_start();
include("header.php");
?>
<link rel="stylesheet" type="text/css" href="register.css"></head>
<body class="bgclr"  >
<br><div align="left">



<form method="post" enctype="multipart/form-data" name="reg" action="newstest.php" >
  <div class="container" align="left"  >


  <b>Title:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><input type="text" placeholder="enter news title" name="title"><br>
  <label><b> news related image:</b></label>

  <input type="file" name="news" accept="image/*" /><br> 
  
	 <b>Description:</b><textarea  name="desc"  style="width: 100%; height: 30%;"></textarea>

	 
	 <button type="submit" name="submit" class="registerbtn">Upload</button>
	</div></div>
	<div>
<?php
include("footer.php");
// session_start();
  ?>
</div>

	</body>
	<html>
	