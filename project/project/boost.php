<!DOCTYPE html>
<html>
<head>
<title>Alumni Portal</title>
</head>
<?php
 session_start();

 include("header.php");
  ?>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>





h1{
  color:#FF9800;
}


/*************************************************menu.......bar*************************************************/

.menu1{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}


li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

/***************images ******************/
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
  color:white;
    padding: 15px;
    text-align: center;
}
* {
    box-sizing: border-box;
}

  
</style>
</head>
<body>
<body background="download.jpg">


<!--............................................menu bar..............................................-->


   

 
<h1 align="center" > Welcome to gallery</h1>

<!--.......................................slide shows..................................................-->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="masab tank college.jpg" style="width:100%" border="10px">
  <div class="text">masab tank college</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="computer branch.jpg" style="width:100%"border="10px">
  <div class="text">computer branch</div>
</div>



<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="masab tank frent view.jpg" style="width:100%"border="10px">
  <div class="text">masab tank frent view</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<!--........................................photos of college.........................................-->

<table align="center">
  <tr>
    <td>
    <div class="gallery">
  <a target="_blank" href="masab tank college.jpg">
    <img src="masab tank college.jpg" alt="masab tank college" width="600" height="400">
  </a>
  <div class="desc"><color="white">masab tank college</div>
</div>
   </td>

   <td>
<div class="gallery">
  <a target="_blank" href="masab tank frent view.jpg">
    <img src="masab tank frent view.jpg" alt="masab tank frent view" width="600" height="400">
  </a>
  <div class="desc">masab tank frent view</div>
</div>
</td>

<td>
<div class="gallery">
  <a target="_blank" href="group.jpg">
    <img src="group.jpg" alt="group" width="600" height="400">
  </a>
  <div class="desc">cme group students</div>
</div>
</td>

<td>
<div class="gallery">
  <a target="_blank" href="oldcollege.jpg">
    <img src="oldcollege.jpg" alt="oldcollege" width="600" height="400">
  </a>
  <div class="desc">oldcollege</div>
</div>
</td>

<td>
<div class="gallery">
  <a target="_blank" href="laptop.jpg">
    <img src="laptop.jpg" alt="laptop" width="600" height="400">
  </a>
  <div class="desc">laptops distibution by principal and cme HOD</div>
</div>
</td>

<td>
<div class="gallery">
  <a target="_blank" href="sujana2.jpg">
    <img src="sujana2.jpg" alt="srujana in college" width="600" height="400">
  </a>
  <div class="desc">srujana project works in college</div>
</div>
</td>


    </tr>

<!--................................... 2nd row photos.............................-->
    <tr>

  <td>
<div class="gallery">
  <a target="_blank" href="telanganaformation.jpg">
    <img src="telanganaformation.jpg" alt="telanganaformation" width="600" height="400">
  </a>
  <div class="desc">telanganaformation</div>
</div>
</td>


<td>
<div class="gallery">
  <a target="_blank" href="harita1.jpg">
    <img src="harita1.jpg" alt="haritaharam in college" width="600" height="400">
  </a>
  <div class="desc">haritaharam in college </div>
</div>
</td>

<td>
<div class="gallery">
  <a target="_blank" href="harithahar.jpg">
    <img src="harithahar.jpg" alt="haritaharam in college" width="600" height="400">
  </a>
  <div class="desc">haritaharam in college </div>
</div>
</td>

<td>
<div class="gallery">
  <a target="_blank" href="harithaharam.jpg">
    <img src="harithaharam.jpg" alt="haritaharam in college" width="600" height="400">
  </a>
  <div class="desc">haritaharam in college </div>
</div>
</td>

<td>
<div class="gallery">
  <a target="_blank" href="swatchbharath.jpg">
    <img src="swatchbharath.jpg" alt="swatchbharath in college" width="600" height="400">
  </a>
  <div class="desc">swatchbharath in college</div>
</div>
</td>

<td>
<div class="gallery">
  <a target="_blank" href="srujana1.jpg">
    <img src="srujana1.jpg" alt="srujana in college" width="600" height="400">
  </a>
  <div class="desc">srujana project works in college</div>
</div>
</td>

</tr>

<!--.............................................3td row photos......................................-->


<?php

		
		include("db_connect.php");
		
		$query = "select title,image from gallery;" ;
		$result = mysqli_query($con,$query);
		
		$num_rows = mysqli_num_rows($result);
       // echo $num_rows;		
		if($num_rows >0)
		{
		while($row = mysqli_fetch_assoc($result))
			{	
		$temp = 1;
echo"

  <td>
<div class=\"gallery\">
  <a target=\"_blank\" href='".$row["image"]."'>
    <img src='/project/project/".$row["image"]."' alt=".$row["image"]." width=\"600\" height=\"400\">
  </a>
  <div class=\"desc\">".$row["title"]."</div>  
</div>
</td>


</div>
    </div></div>";
	 
				
				
				
				
				
				
				
				
			$temp++;
			}
		
		}
		else
		{
			echo "End Of Line";
			
		}

?>









</table>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
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
