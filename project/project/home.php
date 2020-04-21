<!doctype.html>
 <html>
 <head>
 
 <title>Alumni portal</title>

<?php
 session_start();
 $_SESSION["val"] = 0;
 include("header.php");	
 include("db_connect.php");
?>
 
	
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
 
 </head>
<body>
 <link rel="stylesheet" type="text/css" href="/project/project/css.css">
<?php 


		$query = "select *  from news where status=1 order by id desc ;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows > 0)
		{
			$n_t = mysqli_fetch_assoc($result);
			echo ' <marquee behavior="scroll" direction="right"> <font color="red" ><b>Latest:</b></font> '.$n_t['news_title'].'[ '.$n_t['CreatedOn'] .' ]</marquee>';

		}
?> 
	
	<td align="top" >
<form method="post" action="validate.php" background-image="backl.jpg"; >
 <div class="arrange-horizontally">
<div class="news" >
  
		<?php
		

		
		$query = "select news_title,news_desc,image  from news where status=1 order by id desc ;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		
		if($num_rows >0)
		{   
			
			while($row = mysqli_fetch_assoc($result))
			{
			if($row["status"] = 1)
			{ 
					echo "<h1>".$row["news_title"]."</h1>";
					echo "<br><center>";
					echo "<img src='".$row["image"]."' height=\"300px\" width=\"300px\" align=\"top\" >";
					//echo "  <img src=\"masab tank college.jpg\" style=\"width: 100%; display: none;\" align=\"middle\">";
					echo "</center><br>";
					
					echo $row["news_desc"];
					echo "<br>";
					
					
				
			}
			}
					
		}
		
		?>
		
		</div>	<div class="grid-container" align="left" style="max-height:20%"> 
	

<!-- End of news feed-->	
<fieldset >
 <center><img src="log.png"  width="50%" height="50%"></center>
 <center><big>Log in</big></center><br>
     
    <label for="email">Email</label>
    <input type="text" name="email"  placeholder="Your email..">  
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Your password..">

    
    <a href="nav.php?s=forgot_pass">Forgot password</a> 
    ------<a href="nav.php?s=reg"> register</a>

<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button type="submit" class="button" style="align:middle" ><span>log in </span></button>
  </fieldset>
 
   </div>
  </div>
   </form>
   <div>
<?php
include("footer.php");
// session_start();
  ?>
</div>

 </body>
</html>