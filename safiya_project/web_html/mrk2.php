<?php
include("db_connect.php");
include("header.php");
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"register.css\">
<style>
td{
	color:white;
	
}
tr{
	color:yellow;
}

</style>";

$sem=$_POST["sem"];
session_start();
$_SESSION["semval"]=$sem;

echo"<form action=\"enter.php\" method=\"post\"><center>


					<a href=\"mrkatt.php\" style=\"text-decoration:none;color:white;\">Back</a>
<br/><br/>


<font color=\"white\"> SEM:<font size=\"6\" color=\"gold\"> ".$sem."</font>&nbsp&nbsp&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp  </font> ";
echo "<font color=\"yellow\"><script>var d = new Date();document.write(d);</script></font></center><br/>";
	if($sem==1)
	{
		
$query = "select * from student;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
			echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Mark if Present</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["pin"]."</td>
					<td><input type=\"checkbox\" name=\"mark[]\" value=".$row["pin"]."></td>
					</tr>";					
				
			}
			echo "</table>";
			
					
		}
		
}


if($sem==2)
	{
		
$query = "select * from student2;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
			echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Mark if Present</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["pin"]."</td>
					<td><input type=\"checkbox\" name=\"mark[]\" value=".$row["pin"]."></td>
					</tr>";					
				
			}
			echo "</table>";
			
					
		}
		
}


if($sem==3)
	{
		
$query = "select * from student3;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
			echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Mark if Present</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["pin"]."</td>
					<td><input type=\"checkbox\" name=\"mark[]\" value=".$row["pin"]."></td>
					</tr>";					
				
			}
			echo "</table>";
			
					
		}
		
}


if($sem==4)
	{
		
$query = "select * from student4;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
			echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Mark if Present</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["pin"]."</td>
					<td><input type=\"checkbox\" name=\"mark[]\" value=".$row["pin"]."></td>
					</tr>";					
				
			}
			echo "</table>";
			
					
		}
		
}

if($sem==5)
	{
		
$query = "select * from student5;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
			echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Mark if Present</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["pin"]."</td>
					<td><input type=\"checkbox\" name=\"mark[]\" value=".$row["pin"]."></td>
					</tr>";					
				
			}
			echo "</table>";
			
					
		}
		
}

if($sem==6)
	{
		
$query = "select * from student6;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
			echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Mark if Present</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["pin"]."</td>
					<td><input type=\"checkbox\" name=\"mark[]\" value=".$row["pin"]."></td>
					</tr>";					
				
			}
			echo "</table>";
			
					
		}
		
}


echo "<input type=\"submit\" name=\"submit\" class=\"registerbtn\" value=\"submit\">";







?>