<html>
<head>
<title>
Login and Registration</title>
<link rel="stylesheet" href="registration.css">
</head>
<body>
<div class="login-page">
<div class="form">
<form method="post" action="mddoctreg.php"   class="register-form">
<input type="text" placeholder="NAME" name="NAME"/>
<input type="text" placeholder="DOCTOR ID" name="DOCTORID"/>
<input type="text" placeholder="DATE OF BIRTH(DDMMYYYY)" name="DOB"/>
<input type="text" placeholder="QUALIFICATION" name="QUALIFICATION"/>
<input type="text" placeholder="SPECIALIST IN" name="SPECIALISTIN"/>
<input type="text" placeholder="EXPERIENCE" name="EXPERIENCE"/>
<input type="text" placeholder="HOSPITAL" name="HOSPITAL"/>
<input type="text" placeholder="EMAIL"name="EMAIL"/>
<input type="text" placeholder="PHONE" name="PHONE"/>
<input type="text" placeholder="MEDINFO USERNAME" name="MEDINFOUSERNAME"/>
<input type="password" placeholder="PASSWORD" name="PASSWORD"/>
<input type="password" placeholder="CONFIRM PASSWORD" name="CONFIRMPASSWORD"/>


<center>  GENDER :</center>
<input type="radio" name="male" value="gender" name="male">Male</input>
<input type="radio" name="female" value="gender " name="female">Female</input>
<p class="message">Alerady Registered? <a href="#">Login</a>
</p>
<input type="submit" value="submit" name="submit">	

</form>

<form method="post" action="hp" acclass="login-form">
<input type="text" placeholder="user name" name="username"/>
<input type="password" placeholder="password" name="password"/>
<button>login</button>
<p class="message">Not Registered? <a href="#">register</a>
</p>

</form>
</div>
</div>
<script src="jquery-3.3.1.min.js">
</script>
<script>
$('.message a').click(function(){
$('form').animate({height: "toggle", opacity: "toggle"},"slow");
});
</script>
</body>
</html>