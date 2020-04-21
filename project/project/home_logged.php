<!doctype.html>
 <html>
 <head>
 	<title>Alumni portal</title>
<?php
 
 session_start(); 
// $_SESSION["val"] = 1;
if($_SESSION["id"]<=0)
{
	echo "<script> window.location.replace(\"/project/project/home.php\"); </script>";
	
}else
{
	$_SESSION["val"] = 1;
//	echo "Logged successfully";
	include('header.php');
		include("db_connect.php");

}
 ?>
 <style>
 .menu2{
    list-style-type: none;
    margin: 0;
    padding:0;
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
    padding: 12px 16px; ;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
	<link rel="stylesheet" type="text/css" href="galery.css">
	
<meta name="viewport" content="width=device-width, initial-scale=1">
 
 </head>
 <body><br>
 <link rel="stylesheet" type="text/css" href="/project/project/css.css">
 <?php 


		$query = "select *  from news where status=1 order by id desc ;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		if($num_rows > 0)
		{
			$n_t = mysqli_fetch_assoc($result);
			echo '<marquee behavior="scroll" direction="right"> <font color="red" ><b>Latest:</b></font> '.$n_t['news_title'].'[ '.$n_t['CreatedOn'] .' ]</marquee>';

		}
?> 

  </ul>
  	
	<td align="top" >
<div class="arrange-horizontally">
<div class="news" style="word-wrap: break-word; ">
  
				<?php
		$query = "select news_title,news_desc,image  from news where status=1  order by id desc ;" ;
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
		
</div>
<!--  Start of User details code  -->
<div   class="grid-container" align="left">
<fieldset>
<?php

include("db_connect.php");
if(isset($_REQUEST["logout"]))
{
	session_destroy();
	echo "<script> window.location.replace(\" /project/project/home.php \") </script> ";
	
}
$user_id = $_SESSION["id"];
$query2 = "select * from users where status=2 and user_id=".$user_id.";" ;
$result2 = mysqli_query($con,$query2);
if(!($result2)){echo mysqli_error($con);}
$num_rows2 = mysqli_num_rows($result2);
//echo $num_rows2;
echo "<style>
.container {
    position: relative;
    width: 70%;
	background-color:white;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}


.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
      width: 70%;
	background-color:white;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
//  font-size: 16px;
//  padding: 16px 32px;
}
</style>
";
if($num_rows2 >0)
{   
$row2 = mysqli_fetch_assoc($result2);
//echo "<h2>Name:".$row2["user_fname"]."  ".$row2["user_lname"]."</h2><br>";


echo"<div class=\"container\">
  <img src='".$row2["avatar"]."'  class=\"image\" style=\"width:100%\" height='30%'>
  <div class=\"middle\">
    <div class=\"text\"><h2>".$row2["user_fname"]."  ".$row2["user_lname"]."</h2><br></div>
  </div>
</div>
";
}
		
 ?>
 <form name="logout" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" /> <input type="submit" name="logout" value="Logout" /></form>
</fieldset>
</div>
</div>
<div>
<?php
include("footer.php");
// session_start();
  ?>
</div>

</body>
</html>