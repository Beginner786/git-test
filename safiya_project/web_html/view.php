<?php
include("db_connect.php");
include("header.php");
echo "<style>
td{
	color:white;
	
}
tr{
	color:yellow;
}

</style>";

$sem=$_POST["sem"];

echo"<center>


					<a href=\"factdata.php\" style=\"text-decoration:none;color:white;\">Back</a>
<br/><br/><br/>


<font color=\"white\"> SEM= ".$sem."  </font></center>";

	if($sem==1)
	{
		
$query = "select * from student;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
					echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>Name</th>
<th>PIN</th>
<th>Parent Name</th>
<th>Branch/shift</th>
<th>sem</th>
<th>College</th>
<th>Phone number</th>
<th>Mail Id</th>
<th>Address</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["name"]."</td>
					<td>".$row["pin"]."</td>
					<td>".$row["parentname"]."</td>
					<td>".$row["branch-shift"]."</td>
					<td>".$row["sem"]."</td>
					<td>".$row["college"]."</td>
					<td>".$row["phno"]."</td>
					<td>".$row["mailid"]."</td>
					<td>".$row["address"]."</td>
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
<th>Name</th>
<th>PIN</th>
<th>Parent Name</th>
<th>Branch/shift</th>
<th>sem</th>
<th>College</th>
<th>Phone number</th>
<th>Mail Id</th>
<th>Address</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["name"]."</td>
					<td>".$row["pin"]."</td>
					<td>".$row["parentname"]."</td>
					<td>".$row["branch-shift"]."</td>
					<td>".$row["sem"]."</td>
					<td>".$row["college"]."</td>
					<td>".$row["phno"]."</td>
					<td>".$row["mailid"]."</td>
					<td>".$row["address"]."</td>
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
<th>Name</th>
<th>PIN</th>
<th>Parent Name</th>
<th>Branch/shift</th>
<th>sem</th>
<th>College</th>
<th>Phone number</th>
<th>Mail Id</th>
<th>Address</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["name"]."</td>
					<td>".$row["pin"]."</td>
					<td>".$row["parentname"]."</td>
					<td>".$row["branch-shift"]."</td>
					<td>".$row["sem"]."</td>
					<td>".$row["college"]."</td>
					<td>".$row["phno"]."</td>
					<td>".$row["mailid"]."</td>
					<td>".$row["address"]."</td>
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
<th>Name</th>
<th>PIN</th>
<th>Parent Name</th>
<th>Branch/shift</th>
<th>sem</th>
<th>College</th>
<th>Phone number</th>
<th>Mail Id</th>
<th>Address</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["name"]."</td>
					<td>".$row["pin"]."</td>
					<td>".$row["parentname"]."</td>
					<td>".$row["branch-shift"]."</td>
					<td>".$row["sem"]."</td>
					<td>".$row["college"]."</td>
					<td>".$row["phno"]."</td>
					<td>".$row["mailid"]."</td>
					<td>".$row["address"]."</td>
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
<th>Name</th>
<th>PIN</th>
<th>Parent Name</th>
<th>Branch/shift</th>
<th>sem</th>
<th>College</th>
<th>Phone number</th>
<th>Mail Id</th>
<th>Address</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["name"]."</td>
					<td>".$row["pin"]."</td>
					<td>".$row["parentname"]."</td>
					<td>".$row["branch-shift"]."</td>
					<td>".$row["sem"]."</td>
					<td>".$row["college"]."</td>
					<td>".$row["phno"]."</td>
					<td>".$row["mailid"]."</td>
					<td>".$row["address"]."</td>
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
<th>Name</th>
<th>PIN</th>
<th>Parent Name</th>
<th>Branch/shift</th>
<th>sem</th>
<th>College</th>
<th>Phone number</th>
<th>Mail Id</th>
<th>Address</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["name"]."</td>
					<td>".$row["pin"]."</td>
					<td>".$row["parentname"]."</td>
					<td>".$row["branch-shift"]."</td>
					<td>".$row["sem"]."</td>
					<td>".$row["college"]."</td>
					<td>".$row["phno"]."</td>
					<td>".$row["mailid"]."</td>
					<td>".$row["address"]."</td>
					</tr>";					
				
			}
			
				echo "</table>";	
		}
		
}



?>