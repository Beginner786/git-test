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
echo "<div align=\"left\">
					<a href=\"fact1.php\" style=\"text-decoration:none;color:white;\">Add Faculty</a>
					</div>
					<div align=\"right\">	
					<a href=\"data.php\" style=\"text-decoration:none;color:white;\">Back</a>
					</div>";
$query = "select id,name,inchargeof,college,phoneno,mailid,address from faculty;" ;
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
					echo "<table cellpadding=\"15\" border=\"3\" name=\"tabfact\" align=\"center\">
<tr align=\"center\">
<th>Id</th>
<th>Name</th>
<th>Incharge of class</th>
<th>College</th>
<th>Phone number</th>
<th>Mail Id</th>
<th>Address</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["id"]."</td>
					<td>".$row["name"]."</td>
					<td>".$row["inchargeof"]."</td>
					<td>".$row["college"]."</td>
					<td>".$row["phoneno"]."</td>
					<td>".$row["mailid"]."</td>
					<td>".$row["address"]."</td></tr>";					
				
			}
			
				echo "</table>";	
		}
		


?>