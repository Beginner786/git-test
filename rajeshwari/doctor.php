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
<link rel="stylesheet" type="text/css" href="doctor1.css">
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
fieldset{
  background-color: #fff;
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
        <li><?php echo $_SESSION['usr_name']; ?></li>

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
</center><center>
  <a href="doctor1.php" target="_blank">search from database</a></center>
 <div class="container"> 
 <fieldset  margin= 0 ; right=15% style="margin-right:120px; border-width: 0;" >
  <fieldset>
<button class="collapsible">Dr.P Taja </button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.P Taja</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:M.B.B.S;M.Sc(Psych);D.P.M</td>
 </tr>
 <tr>
  <td>practic since</td>
  <td>:2001</td>
 </tr>
  <tr>
  <td>Location</td>
  <td>:Nellore</td>
 </tr>
  <tr>
  <td>Category</td>
  <td>:Specialist</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:8500851111</td>
 </tr>
  <tr>
  <td>Website</td>
  <td>:<a htef="www.srinivasateja.com">www.srinivasateja.com</a></td>
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="Teja.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>

<fieldset>
<button class="collapsible">Dr.Somnath Gupta</button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Somnath Gupta</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:M.B.B.S<td>
 </tr>
 <tr>
  <td>practic since</td>
  <td>:2017</td>
 </tr>
  <tr>
  <td>WORKS AT</td>
  <td>:Pace Hospital</td>
 </tr>
  <tr>
  <td>Category</td>
  <td>:Cardiology</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:875297642</td>
 </tr>
  <tr>
  <td>Website</td>
  <td>:</td>
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="somnath.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>


<fieldset>
<button class="collapsible">Dr.Ariganesh Chandrasegaran </button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Ariganesh Chandrasegaran</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:M.B.B.S; MD(Dermatology)</td>
 </tr>
 <tr>
  <td>practic since</td>
  <td>:2008</td>
 </tr>
  <tr>
  <td>Location</td>
  <td>:Chennai</td>
 </tr>
  <tr>
  <td>Category</td>
  <td>:Specialist</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:8588860079</td>
 </tr>
  <tr>
  <td>Website</td>
  <td>:<a htef="www.hairtransplantchennai.org/hair-transplant-surgeon-in-chennai.php">www.hairtransplantchennai.org/hair-transplant-surgeon-in-chennai.php</a></td>
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="Ariganesh.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>
<fieldset>
<button class="collapsible">Dr.Charan Das </button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Charan Das</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:RPM Haryana,1963</td>
 </tr>
 <tr>
  <td>practic since</td>
  <td>:1963</td>
 </tr>
  <tr>
  <td>Location</td>
  <td>:Delhi</td>
 </tr>
  <tr>
  <td>Category</td>
  <td>:Ayurveda</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:7838193932</td>
 </tr>
  <tr>
  <td>Website</td>
  <td>:<a htef="www.infodoctor.in/charan-das/1052">http://www.topbestsexologist.com</a></td>
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="Charan.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>
 <fieldset>
<button class="collapsible">Dr.Sandhya</button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Sandhya</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:M.B.B.S</td>
 </tr>
 <tr>
  <td>Practic since</td>
  <td>:1999</td>
 </tr>
  <tr>
  <td>Specialist</td>
  <td>:Forensic Pathologist</td>
 </tr>
  <tr>
  <td>Experience</td>
  <td>:20 years experience</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:875297640</td>
 </tr>
  <tr>
 
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="sandhya.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>        
 <fieldset>
<button class="collapsible">Dr.Mohammad Rafi</button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Mohammad Rafi</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:MBBS, ACLS, SCFHS, M.H.Sc-Diabetology</td>
 </tr>
 <tr>
  <td>Practic since</td>
  <td>:2001</td>
 </tr>
  <tr>
  <td>Specialist</td>
  <td>:Diabetologist and Interventional Cardiologist </td>
 </tr>
  <tr>
  <td>Experience</td>
  <td>:17 years experience</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:8264850725</td>
 </tr>
  <tr>
 
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="thumbnail.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset> 
 <fieldset>
<button class="collapsible">Dr.Shoba</button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Shoba</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:MBBS</td>
 </tr>
 <tr>
  <td>Practic since</td>
  <td>:1999</td>
 </tr>
  <tr>
  <td>Specialist</td>
  <td>:Gynecologist </td>
 </tr>
  <tr>
  <td>Experience</td>
  <td>:20 years experience</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:9787954392</td>
 </tr>
  <tr>
 
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="Ashish.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>
 <fieldset>
<button class="collapsible">Dr.Rajesh Vakkula</button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Rajesh Vakkula</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:MBBS</td>
 </tr>
 <tr>
  <td>Practic since</td>
  <td>:1999</td>
 </tr>
  <tr>
  <td>Specialist</td>
  <td>:Hand Surgeon </td>
 </tr>
  <tr>
  <td>Experience</td>
  <td>:20 years experience</td>
 </tr>
 <tr>
  <td>Hospital(work)</td>
  <td>: VINN</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:978797642</td>
 </tr>
  <tr>
 
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="Rajesh.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>
 <fieldset>
<button class="collapsible">Dr.lily Radrigues</button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.lily Radrigues</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:DNB</td>
 </tr>
 <tr>
  <td>Practic since</td>
  <td>:1997</td>
 </tr>
  <tr>
  <td>Specialist</td>
  <td>:plastic surgeon </td>
 </tr>
  <tr>
  <td>Experience</td>
  <td>:23 years experience</td>
 </tr>
 <tr>
  <td>Hospital(work)</td>
  <td>: Suraksha</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:6827954392</td>
 </tr>
  <tr>
 
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="lily.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>
<fieldset>
<button class="collapsible">Dr.Neekima Reddy</button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Neekima Reddy</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:MBBS</td>
 </tr>
 <tr>
  <td>Practic since</td>
  <td>:1998</td>
 </tr>
  <tr>
  <td>Specialist</td>
  <td>:Allergist </td>
 </tr>
  <tr>
  <td>Experience</td>
  <td>:23 years experience</td>
 </tr>
 <tr>
  <td>Hospital(work)</td>
  <td>:</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:7327639392</td>
 </tr>
  <tr>
 
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="neelima.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>
<fieldset>
<button class="collapsible">Dr.Jeevan Reddy</button>
<div class="content">
  <div class="row">
  <div class="column" style="  width: 60%;">
   
    <h4><table>
 <tr>
 <td>Name</td>
  <td>:Dr.Jeevan Reddy</td>
 </tr>
 <tr>
  <td>Qualification</td>
  <td>:MD</td>
 </tr>
 <tr>
  <td>Practic since</td>
  <td>:1998</td>
 </tr>
  <tr>
  <td>Specialist</td>
  <td>:Hospitalists </td>
 </tr>
  <tr>
  <td>Experience</td>
  <td>:20 years experience</td>
 </tr>
 <tr>
  <td>Hospital(work)</td>
  <td>:VANAJA</td>
 </tr>
  <tr>
  <td>Mobile</td>
  <td>:7327639392</td>
 </tr>
  <tr>
 
 </tr>
</table>
</h4>
  </div>
  <div class="column"  border="black">
    <img src="Jeevan.jpg" height="200px" width="200px">

  </div>
</div>
</div>
</fieldset>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</div>
 
</div>
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
