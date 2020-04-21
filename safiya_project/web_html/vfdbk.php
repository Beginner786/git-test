<?php
include("db_connect.php");
include("header.php");

echo "<div align=\"center\">	
					<a href=\"factdata.php\" style=\"text-decoration:none;color:white;\">Back</a><br/><br/>
					</div>";
					echo "<style>
td{
	color:white;
	
}
tr{
	color:yellow;
}

</style>";
$query = "select * from prtfdbk ORDER BY time DESC;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
					echo "<table cellpadding=\"15\" border=\"3\" name=\"tabprt\" align=\"center\">
<tr align=\"center\">
<th>Time</th>
<th>Type</th>
<th>Subject</th>
<th>Description</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["time"]."</td>
					<td>".$row["type"]."</td>
					<td>".$row["subject"]."</td>
					<td>".$row["description"]."</td>
					</tr>";					
				
			}
			
				echo "</table>";	
		}
		

?>