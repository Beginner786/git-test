<?php
include("db_connect.php");
include("header.php");
session_start();
echo "
					<div align=\"right\">	
					<a href=\"prtdata.php\" style=\"text-decoration:none;color:white;\">Back</a>
					</div>";
					echo "<style>
td{
	color:white;
	
}
tr{
	color:yellow;
}

</style>";
$query = "select * from attendance ORDER BY date DESC;" ;                                                                                                                                
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		$count=$totaldays=0;$Array=array();
		if($num_rows >0)
		{
					echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>Semester</th>
<th>Time</th>
<th>Student's Present </th>
<th>By</th>
</tr>		";
			
			while($row = mysqli_fetch_assoc($result))
			{
					if($_SESSION["pssem"]==$row["sem"]){
					echo "<tr>
					<td>".$row["sem"]."</td>
					<td>".$row["date"]."</td>
					<td>".$row["present stds"]."</td>
					<td>".$row["by"]."</td>
					</tr>";	
					$str_arr = explode (",", $row["present stds"]);
					foreach ($str_arr as &$value)
					{if($value==$_SESSION["pspin"]){$count++;}}
					$totaldays++;					
				
}else
			{continue;	}}
			
			
				echo "</table>";	echo "<font style=\"font-family:Lexia;color:white;size=10;\"><br><br><br>Number days present:".$count;
				echo"<br>Total Number of working days:".$totaldays;
				$perc=$count/$totaldays;
				$bruh=$perc*100;
				echo "<br>Attendance Percentage:".($perc*100)."%";
		}
		
echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Total Working Days</th>
<th>Number of Days Present</th>
<th>Attendance Percentage</th>
</tr>
<tr>
<td>".$_SESSION["pspin"]."</td>
<th>".$totaldays."</th>
<th>".$count."</th>
<td>".$bruh."</td>
</tr>		";
		
		
?>