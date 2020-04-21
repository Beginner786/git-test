<html>
<head> news upload
<title>Alumni Portal</title>
<?php 
session_start();
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="register.css">

</head>
<body ><br><div align="left">



<form method="post" enctype="multipart/form-data" name="reg" action="galleryupload.php" >
  <div class="container" align="left"  >


  <b>Title:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><input type="text" placeholder="name" name="title"><br>
  <label><b>related images:</b></label>

  <input type="file" name="img" accept="image/*" /><br> 
	 

	 
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
