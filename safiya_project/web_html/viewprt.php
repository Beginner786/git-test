<?php
include("db_connect.php");
include("header.php");

echo "<div align=\"center\">	
					<a href=\"viewstdprt.php\" style=\"text-decoration:none;color:white;\">Back</a><br/><br/>
					</div>";
					echo "<style>
td{
	color:white;
	
}
tr{
	color:yellow;
}

</style>";
$query = "select * from parent;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);

		if($num_rows >0)
		{
					echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>Parent Name</th>
<th>Student PIN</th>
<th>Phone number</th>
<th>Email ID</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					echo "<tr>
					<td>".$row["name"]."</td>
					<td>".$row["pin"]."</td>
					<td>".$row["phno"]."</td>
					<td>".$row["email"]."</td>
					</tr>";					
				
			}
			
				echo "</table>";	
		}
		

?>