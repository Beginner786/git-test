<html>
<head>

</head>
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
<body class="header">
 
<img src="/project/project/up.jpg" width="100%"></img>
 <ul class="menu2">
  <li><a href="/project/project/nav.php?s=home" >Home</a></li>
  
  <li><a href="/project/project/nav.php?s=f_s">Faculty & Staff</a></li>
  
  <li><a href="/project/project/nav.php?s=gallery">Gallery</a></li>
  
  <li><a href="/project/project/nav.php?s=donors">Donors</a></li>

  <li><a href="/project/project/nav.php?s=about">About</a></li>
  <?php
//    session_start();
if($_SESSION["val"] == 1)
{	
	if($_SESSION["role"] == 1)
	{
		echo "<li><a href=\"/project/project/nav.php?s=alumnes\">Alumnes</a></li>";
		
	}
	elseif($_SESSION["role"] == 2)
	{
		echo "<li><a href=\"/project/project/nav.php?s=alumnes\">Alumnes</a></li>";
	
		echo "<li><a href=\"/project/project/nav.php?s=newsup\">Update News</a></li>";
	
		echo "<li><a href=\"/project/project/nav.php?s=ga_up\">Upload to Gallery</a></li>";
	}
}
?>
</ul>

</body>
</html>