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
	</style>
  </head>

  <body>
   <header background="product.jpg">
   <table id="customers" >
   			

        <td ><a class="navbar-brand" href="main.php"><img src="logo.jpeg" align="left" border="2px" width="100 height="100"></a></td>	 
        <td ><h1 style="text-align:left; color:black; font-family: sans-serif;">MEDINFO</h1></td>

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
        				<a href="logout.php">Log Out</a></li>

				<li><?php } else { ?>
				<a href="login.php">Login</a>
				<?php } ?></li>
				<li><a href="doctreg.php">Dr.SIGN IN</a></li>
			</ul>
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
      <div class="featured-block">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="img/recent1.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>SBL</h1>
                <p>It is used for the treatment of cough,cold,catarrh.</p>
           
              </div>
              </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                    <img src="img/m2.jpg" alt="" class="img-responsive">
                    <div class="caption">
                      <h1>Sorafe'nat</h1>
                      <p>It is an oral kinase inhibitor used for kidney and liver cancer.</p>
                    
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="block">
                <div class="thumbnail">
                  <img src="img/m4.jpg" alt="" class="img-responsive">
                  <div class="caption">
                    <h1>Vaccine</h1>
                    <p>A vaccine is a biological preparation that provides active acquired immunity to a particular disease.</p>
                
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-md-3">
            <div class="block">
            <div class="thumbnail">
              <img src="img/m3.jpg" alt="" class="img-responsive">
              <div class="caption">
                <h1>Virpas</h1>
                <p>It is in the category of anti cancer drug.</p>
             
              </div>
              </div>
            </div>
            </div>
            
          </div>
		   <div class="ruler"></div>  
        </div>
            

                
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">OxyContin, Oxyfast, Roxicodone.</div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          
        </div> 
        <div class="ruler"></div>  
        </div>
        
          <div class="ruler"></div>
        </div>
      <div class="container">
        <div class="featured-content">
          <div class="col-md-6">
            <div class="block">
              <img src="img/hm1.jpg" alt="" class="img-spacing thumbnail">
              <h1>Homeopathic Products</h1>
              <p>Homeopathy,or homeopathic medicine, is a holistic system of treatment that originated in the late 18th century.
              </p>
              <p>Homeopathic phsicians seek to cure their patients on the physical,mental and emotional levels and each treatment is tailored to a patient's
			  individual needs.
              </p>
          
            </div>            
          </div>
          <div class="col-md-6">
            <div class="block">
              <img src="img/al1.jpg" alt="" class="img-spacing thumbnail">
              <h1>Allopathic Products</h1>
              <p>Allopathic medicine is an expression commonly used in India and other countries like Ghana and Korea to refer to modern system of medicine. </p>
              <p>The term is also used by homeopaths and Proponents of other forms of alternative medicine.</p>
           
            </div>            
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
