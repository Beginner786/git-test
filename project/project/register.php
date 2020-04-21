<!doctype.html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<?php
session_start();
include("header.php");
require("src/sendmail.php");
 ?>
<form method="post" action="reg.php" enctype="multipart/form-data" name="reg" >
  <div class="container" align="center" >
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
   <label for="fname"><b>First name</b></label><br>
    <input type="text" placeholder="Enter first name" name="fname" required><br>
	
   <label for="lname"><b>Last name</b></label><br>
    <input type="text" placeholder="Enter last name" name="lname" required>
	<br>
	<label> <b> Pin no </b></label><br>
<div class="pin" >
	<input type="number" min="1"  placeholder="           ----" name="pin_year"  required> 
	
	<select name="pin_branch">
	<option value="--Course--" >--Course--</option>
	<option value="A">A</option>
	<option value="CM">CM</option>
	<option value="EC">EC</option>
	<option value="EE">EE</option>
	<option value="M">M</option>
	<option value="P">P</option>
    <option value="C">C</option>
</select>
	<input type="number" min="1"  placeholder="           ---"  name="pin_num" required><br>
</div>
	<h3>Gender</h3>
	<input type="radio"  name="gender" value="m" required>
	<label for="male"><b>male</b></label>
    
	<input type="radio" name="gender" value="f" required>
	<label for="female"><b>female</b></label>
    <input type="radio" name="gender" value="other" required>
<label for="transgender"><b>transgender</b></label>
    
	
	<br><br>
    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" onfocus="course()" name="email" required><br>
	
	
	<label><b> Passport photo:</b></label>
	<input type="file" name="pass_photo" required /> <br><br>
	
	
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" minlength="8" id="ps" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" onfocusout="check()" id="psr" name="psrw" required><br>
	
	
	<label for="contact"><b>Your phone no:</b></label><br>
    <input type="number" min="9"  style="width: 50%;    padding: 1%;    margin: 1% 0 2% 0;   // display: inline-block;    border: none;    background: #f1f1f1;" placeholder="Enter your phone no:" class="phno" name="phn" required><br>

	<label><b> Memo/related document:</b></label>
	<input type="file" name="memo" accept="image/*" required /> 
    
	<p>By creating an account you agree to our <a href="tndc.html" >Terms & Privacy</a>.</p>

    <button type="submit"  name="submit" class="registerbtn">Register</button>

  
  <div style="font-style:timesnewroman;">
    <p>Already have an account? <a href="/project/project/home.php">Sign in</a>.</p>
  </div>
  </div>
  </form>
<script type="text/javascript">

function check()
{
var psr = document.reg.psw.value;
var psrw = document.reg.psrw.value;

if(psr != psrw)
{
alert("Re-entered password not matched");		
}
}
function course()
{
	var c = document.reg.pin_branch.value;
	if(c == "--Course--")
	{
		alert("error at course");
	}
	
}
function confirm()
{
	course();
	check();
	
}
</script>
<div>
<?php
include("footer.php");
// session_start();
  ?>
</div>

</body>
</html>
