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
<fieldset margin= 0 ; right=15% style="margin-right:120px; border-width: 0;">
  <fieldset>
<button class="collapsible">AMOX 500 MG CAPSULE:</button>
<div class="content">

<font size="4" style="font-family:lexia;">
<u><h3 style="font-family:arial;color:green;">DESCRIPTION:</h3></u>
<font size="4" style="font-family:lexia;">
<p>
Amox 500 MG  capsule is an antibiotic that is used for treating a wide variety of bacterial infections of kings and air ways, middle ear, sinuses, skin, urinary track etc....
</p>
</font>
<font size="4" style="font-family:cambria;">
<i><b>Note:</b><br>
This medicine is not recommended for treating a common cold, flu or other viral infections since it is not effective in treating these infections
</i></font>


<font size="4" style="font-family:lexia;">
<p>
Cetirizine is an anti allergic that treats runny nose, watery eyes. Ambroxol is a mucolytic which thins and looses mucus, making it easier to cough out.
</p>
</font><a class="btn" href="amox1.html">more</a>
</div></fieldset>


<fieldset>
<button class="collapsible">CETIRI:</button>
<div class="content">

<font size="4" style="font-family:lexia;">
<u><h3 style="font-family:arial;color:green;">DESCRIPTION:</h3></u>
<font size="4" style="font-family:lexia;">
<p>
Cetirizine is an antihistamine used to relieve allergy symptoms such as watery eyes, running nose, itching eyes/nose, sneezing, hives and itching.
    <br> It works by blocking a certain natural substances(histamine) that your body makes during an allergic reaction.

</p>
</font><a class="btn" href="amox1.html">more</a>
</div></fieldset>

  <fieldset>
<button class="collapsible">DOLO 650:</button>
<div class="content">
  <u><h3 style="font-family:arial;color:green;">DESCRIPTION:</h3></u><br>Dolo 650 MG tablet is used to temporarily relieve fever and mild to moderate pain such as muscle aches,headache, toothache arthritis and backache.</p>Uses:<br>
<b>Fever:</b> Solo  650 mg tablet is used to provide temporary relief from fever without treating the underlying cause.<br>
<b>Headache :</b>Dolo650 mg tablet is used torelieve acute headache including migraine.<br>
<b>Muscle pain:</b> Dolo 650MG tablet is used to relieve moderate pain of the muscles<br>
<b>Side effects:</b>
1.Nausea/ vomiting&nbsp
2.Fever&nbsp
3.Allergic skin reaction&nbsp
4.Gastric/ Mouth ulcer&nbsp
5.Anemia&nbsp
6.Fatigue&nbsp
</div></fieldset>
<fieldset>
<button class="collapsible">AMBCET COLD:</button>
<div class="content">
   
<u><h3 style="font-family:arial;color:green;">DESCRIPTION:</h3></u>
<font size="4" style="font-family:lexia;">
<p>
Ambcet cold is used for cough, allergy symptoms, sneezing, running nose, watery eyes, diseases associated with abnormal mucus secretion and other conditions.
</p>
</font>
<font size="4" style="font-family:lexia;">
<p>
Ambcet is a combination of two medicines : Cetirizine and ambroxol which relieve cough.
</p>
</font>


<font size="4" style="font-family:lexia;">
<p>
Cetirizine is an anti allergic that treats runny nose, watery eyes. Ambroxol is a mucolytic which thins and looses mucus, making it easier to cough out.
</p>
</font><a class="btn" href="ambcetc1.html">more</a>
</div></fieldset>

<fieldset >
<button class="collapsible">CIPLOX OZ:</button>
<div class="content">
  <p><b>Uses:</b><br>
&nbsp Ciplox Oz tablet is a combination medicine used for treatment of diarrhea of mixed infections in adults patience only.<br>This medicine is not recommended for the use in patients less than 18 years of age.
</p>
<b>SIDE EFFECTS:</b> 
1.Abdominal pain&nbsp
2.White patches in mouth or on tongue&nbsp
3.Joint pains&nbsp
4.Fever with chills&nbsp
5.Ringing or buzzing in ear&nbsp
6.Muscle pain&nbsp
7.Numbness of the hands&nbsp
8.Running nose&nbsp
9.Headache&nbsp
10.Nausea and Vomitings&nbsp<br>
<a class="btn" href="ciploxoz1.html">more</a>
</div></fieldset>
<fieldset>
<button class="collapsible">CIPLOX 0.3% EYE DROPS:</button>
<div class="content">
<u><h3 style="font-family:arial;color:green;">DESCRIPTION:</h3></u>
Ciplox 0.3 % eye drops is an antibiotic that is used to treat eye infections such as conjunctivitis and corneal ulcers caused by certain types of bacteria.<br>
  <p><b>Uses:</b><br>
<b>Bacterial conjunctivitis:</b>
This  medicine is used in treatment of conjunctivitis, which is an inflammation or infection of conjunctiva, caused by bacteria such as staphylococcus aureus, Streptococcus ,pneumoniae, haemophilia influence,ect.<br>
<b>Corneal  ulcers:</b>
This medicine is used in the treatment of corneal ulcer, which is an infection of inflammatory condition of cornea, caused by bacteria<br> such as staphylococcus aureus, pneumonia ect..
</p>
<b>SIDE EFFECTS:</b> 
1.Blurred vision&nbsp
2.Eye Pain&nbsp
3.Redness of the eye&nbsp
4.Eye Discomfort&nbsp
5.Burningor itching of eyes<br><a class="btn" href="ciploxed.html">more</a>
</div></fieldset>
<fieldset>
<button class="collapsible">AMOX 500 MG CAPSULE:</button>
<div class="content">
<u><h3 style="font-family:arial;color:green;">DESCRIPTION:</h3></u>
Amox 500 MG  capsule is an antibiotic that is usedfor treating a wide variety of bacterial infections of kings and air ways ,middle ear,sinuses,skin,urinary track ect.<br>
  <p><b>Uses:</b><br>
i.  Ear infections ( otitis media)&nbsp
ii. Nose infections( sinusitis)&nbsp
iii.  Lower Respiratory tract infection&nbsp 
iv. Skin infection&nbsp
v.  Urinary tract infection&nbsp
vi. Stomach ulcers&nbsp
vii.  Dental abscess&nbsp
viii. Endocarditis&nbsp

</p>
 <b>DOSAGE:</b>500 GM / day( 1 tablet)
</div></fieldset>
<fieldset>
<button class="collapsible">PARACETAMOL 500MG:</button>
<div class="content">
 <u><h3 style="font-family:arial;color:green;">DESCRIPTION:</h3></u>
Paracetamol tablet classified as a mild analgesic is used to treat fever and is most commonly used pain reliever.<br>
  <p><b>Uses:</b><br>
1.Backache&nbsp
2.Headache&nbsp
3.Arthritis&nbsp
4.Toothache
<br>
<b>Side effects:</b>
1.Low fever with nausea&nbsp
2.Dark urine&nbsp
3.Jaundice&nbsp
4.Sore throat&nbsp
</p>
 <b>DOSAGE:</b>500 MG
</div></fieldset>
<fieldset>
<button class="collapsible">CITRAPHOS:</button>
<div class="content">
 <u><h3 style="font-family:arial;color:green;">DESCRIPTION:</h3></u>
Citraphos is a vitamin of B complex group, used in deficiency states and also in treatment and prevention of megaloblastic anaemia.<br>
  <p><b>Uses:</b><br>
1.Folic acid deficiency&nbsp
2.Megaloblasticanemia&nbsp
3.Anemia of nutritional supplements , pregnancy&nbsp
4.Infancy or childhood&nbsp
<br>
<b>Side effects:</b>
1.Gastrointestinal disturbances&nbsp
2.Hypersensitivity reactions&nbsp
3.Bronchospasm&nbsp

</p>
 <b>DOSAGE:</b>500 MG
</div></fieldset>

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
</fieldset>
</div>
 
</div>
</fieldset>
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
