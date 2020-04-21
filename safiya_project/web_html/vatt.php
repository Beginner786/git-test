<?php
include("db_connect.php");
include("header.php");
$sem=$_POST["ssem"];
$peen=$_POST["spin"];
session_start();
$_SESSION["ssemtv"]=$sem;
$_SESSION["spintv"]=$peen;
echo "<div align=\"left\">
					<a href=\"mrkatt.php\" style=\"text-decoration:none;color:white;\">Mark Attendance</a>
					</div>
					<div align=\"center\">
					<a href=\"vfacstuattper.php\" style=\"text-decoration:none;color:white;\">Get Attendance Percentage</a>
					</div>
					<div align=\"right\">	
					<a href=\"vatte.php\" style=\"text-decoration:none;color:white;\">Back</a>
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
					if($sem==$row["sem"]){
					echo "<tr>
					<td>".$row["sem"]."</td>
					<td>".$row["date"]."</td>
					<td>".$row["present stds"]."</td>
					<td>".$row["by"]."</td>
					</tr>";	
					$str_arr = explode (",", $row["present stds"]);
					foreach ($str_arr as &$value)
					{if($value==$_SESSION["spintv"]){$count++;}}
					$totaldays++;					
				
}else
			{continue;	}}
			
			
				echo "</table>";	//echo "<font style=\"font-family:Lexia;color:white;size=10;\"><br><br><br>Number days present:".$count;
				//echo"<br>Total Number of working days:".$totaldays;
				$perc=$count/$totaldays;
				$damn=$perc*100;
				$_SESSION["yum"]=$damn;
				$_SESSION["yum2"]=$totaldays;
				$_SESSION["yum3"]=$count;
		}
		
echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Total Working Days</th>
<th>Number of Days Present</th>
<th>Attendance Percentage</th>
</tr>
<tr>
<td>".$_SESSION["spintv"]."</td>
<th>".$_SESSION["yum2"]."</th>
<th>".$_SESSION["yum3"]."</th>
<td>".$_SESSION["yum"]."</td>
</tr>		";
			
?>