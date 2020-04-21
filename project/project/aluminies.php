<!doctype.html>
 <html>
 <head>
 	<title>Alumni portal</title>
	 <link rel="stylesheet" type="text/css" href="galery.css">
	
<meta name="viewport" content="width=device-width, initial-scale=1">
 
 <style>
.card {

    box-shadow: 0 4px 8px  0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 50%;
		
}

.card:hover {
	
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {

    padding: 2px 16px;
}
</style>


 </head>
 <body>
 <link rel="stylesheet" type="text/css" href="css.css">
 <?php
 
 session_start(); 
  $_SESSION["val"] = 1;
  include("header.php");
  ?>
 <!-- <center><img src="/project/project/up.png" ></center>
 	  
      <ul class="menu1">
  <li><a href="/project/project/nav.php?s=home" >Home</a></li>
  
  <li><a href="/project/project/nav.php?s=f_s">Faculty & Staff</a></li>
  
  <li><a href="/project/project/nav.php?s=gallery">Gallery</a></li>
  
  <li><a href="/project/project/nav.php?s=donors">Donors</a></li>

  <li><a href="/project/project/nav.php?s=about">About</a></li>

  <li><a href="/project/project/nav.php?s=alumnes">Alumnes</a></li>

  </ul> -->

  <marquee behavior="scroll" direction="right" color="red">Welcome to Govt. Polytechnic, Masab Tank Alumini Portal</marquee>
	
	<td align="top" >
<form method="post" action="validate.php" >
<div style="background-color:#57606f;">
  
  <center><h1 style="font-family:calibri; color:white;">OUR PORTAL ALUMINES</h1></center>
		
		
		<?php
		
		include("db_connect.php");
		
		$query = "select * from users where status=2 and role_id=1;" ;
		$result = mysqli_query($con,$query);
		/*if($result)
		{
			echo "raji";
		}*/
		$num_rows = mysqli_num_rows($result);
       // echo $num_rows;		
		if($num_rows >0)
		{
		while($row = mysqli_fetch_assoc($result))
			{	
		$temp = 1;
		echo "  <div class=\"arrange-vertically\" style=\"background-color:#ffffff;\" >  <div class=\"card\" style=\"background-color:#fed330;\" >
  <img src='".$row["avatar"]."' alt=".$row["avatar"]." style=\"width:100%\">
  <div class=\"container\" style=\"background-color:#fffff;\">
    <h4><b>".$row["user_fname"] ." ".$row["user_lname"]."</b>
	
	
	</h4> 
    <p>
	".$row["pin_year"]."-".$row["pin_branch"]."-".$row["pin_num"]."<br>
	".html_entity_decode($row["user_email"])."<br>"
	.$row["user_phone"]."</p> 
	
  </div>
 
    </div></div>";
	 
								
			$temp++;
			}
		
		}
		else
		{
			echo "End Of Line";
			
		}
		
		?></form>
		</div>
		<div>
<?php
include("footer.php");
// session_start();
  ?>
</div>

				</body>
				
				</html>
		
		
		
		