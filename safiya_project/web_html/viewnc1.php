<?php
include("db_connect.php");
include("header.php");

echo "<div align=\"center\">	
					<a href=\"prtdata.php\" style=\"text-decoration:none;color:white;\">Back</a><br/><br/>
					</div>";
					echo "<style>
td{
	color:white;
	
}
tr{
	color:yellow;
}

</style>";
$query = "select * from fac_notice ORDER BY time DESC;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
					echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>Time</th>
<th>Notice ID</th>
<th>Semester</th>
<th>Title</th>
<th>Description</th>
<th>By</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["time"]."</td>
					<td>".$row["notid"]."</td>
					<td>".$row["sem"]."</td>
					<td>".$row["title"]."</td>
					<td>".$row["description"]."</td>
					<td>".$row["by"]."</td>
					</tr>";					
				
			}
			
				echo "</table>";	
		}
		

?>