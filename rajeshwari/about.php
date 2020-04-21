<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	
  

      <script src="js/jquery.mobilemenu.js"></script>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
 <title>MEDINFO</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link href='mainpage1.css' rel='stylesheet'>
  <style>
body{
background-color:skyblue;
margin:0;
}
		* {
	margin:0;
	padding:0;
}
.menu{
width:100%;
background:#142b47;
overflow:auto;
}
.menu ul {
margin:0;
padding:0;
list-style:none;
line-height:60px;
}
.menu li{
float:left;
}
.menu ul li a{
background:#142b47;
text-decoration:none;
width:130px;
display:block;
text-align:center;
color:#f2f2f2;
font-size:18px;
font-family:sans-serif;
letter-spacing:0.5px;

}
.menu li a:hover {
color:#fff
opacity:0.5;
font-size:19px;
}
  .main1 {
    
    background: #f0ffff;
    top:300px;
    right:50px;
    width: 900px;
    height: 350px;
    border: 1px solid #73AD21;
}
	</style>
  </head>

  <body>
   <header background="product.jpg">
   <table id="customers" >
   			

        <td ><a class="navbar-brand" href="main.php"><img src="logo.jpeg" align="left" border="2px" width="100 height="100"></a></td>	 
        <td ><h1 style="text-align:left; color:black;">MEDINFO</h1></td>

    </table>
</header>
<nav class ="menu" style="height: 15%;">
<ul>
<li><a href="main.php">HOME</a></li>
        <li style="width: 16%;"><a href="doctor.php" >Dr.CONSULTANCY</a></li>
        <li><a href="tablet.php">TABLET</a></li>
        <li><a href="labtest.php">LABTEST</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><?php echo $_SESSION['usr_name']; ?>
        			</li>

				<li><?php } else { ?>
				<a href="login.php">LOGIN</a>
				<?php } ?></li></ul>
 </ul>

 </nav>


<center>
<form method="POST" action="check.php">    
<input type ="text" name="search" class ="search" placeholder ="search Here">    
<input type ="submit" class ="submit" value ="search">
</form>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</center>
           
       <div class="container">
      <fieldset class="main1">
 <div style="color: black;">
<font style="font-family:calibri" size="4">
An essentialmedical website can help a person by giving the details of the medicine when its name is entered.<br> The website gives the details of the medicine like rate of medicine, formula of medicine ,cost of medicine.<br>
This website provides the doctors information like Doctorsname ,Hospital name,Doctor qualification ,Doctor experience<br>
For any doctor appointment the hospital contact details are also provided ,Thus one can fix their appointments by calling.<br>
The disease information ,which can help a person to know about the disease like symptoms of diseases, precautions to be taken to prevent the disease, Cause of disease ect...
</font>
</div></fieldset>
      </div> 
      <div class="footer-wrapper">
        <div class="site-content">
      <div class="container">
        <div class="row">
        <table >
   <tr>
    <th><br></th>
    <th></th>
    
  </tr>
  <tr>
    <th style="font-family:lexia;">Contacts:</th>
    
    
  </tr>
  <tr>
    <td style="font-family:lexia;"> &nbsp  &nbsp &nbsp<img src="facebooklogo.png" height="15" width=15"> Face Book &nbsp:</td>
  
 
  </tr>
  <tr>
    <td style="font-family:lexia;">&nbsp  &nbsp &nbsp<img src="mail.jpg" height="15" width="15"> Gmail &nbsp  &nbsp&nbsp &nbsp  &nbsp:</td>
   
  </tr>
  <tr>
    <td style="font-family:lexia;">&nbsp  &nbsp &nbsp<img src="twitterlogo.png" height="15" width="15"> Twitter &nbsp &nbsp  &nbsp :</td>
    <td></td>
   </tr>
    <tr>
    
</table></center>
<th bgcolor="pink" style="font-family:lexia;">Bult by:</th>
  <td bgcolor="pink" style="color:blue; font-family:lexia;">&nbsp  &nbsp &nbsp Designed and maintained by:</td>
   <td bgcolor="pink"><b><i><u> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp G8 TEC</u></td>
     
        </div>
        </div>
        
      </div>
      <div class="copy-rights">
      <div class="container">
        <div class="row">
          
            
          </div>
        </div><td style="font-family:lexia;">Recognised By:</td>
  
   </tr>
  <td><H4>COPYRIGHTS@ G8 SHIFT-2</H4></td>
      </div>
      </div>

      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    
  </body>
</html>
