<?php
include("db_connect.php");
include("header.php");

session_start();

echo "<div align=\"left\">
					<a href=\"mrkatt.php\" style=\"text-decoration:none;color:white;\">Mark Attendance</a>
					</div>
					
					<div align=\"right\">	
					<a href=\"factdata.php\" style=\"text-decoration:none;color:white;\">Back</a>
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


if($_SESSION["ssemtv"]==1)
	{
$query2 = "select * from student;" ;
	}
	
	if($_SESSION["ssemtv"]==2)
	{
$query2 = "select * from student2;" ;
	}
	
	if($_SESSION["ssemtv"]==3)
	{
$query2 = "select * from student3;" ;
	}
	
	if($_SESSION["ssemtv"]==4)
	{
$query2 = "select * from student4;" ;
	}
	if($_SESSION["ssemtv"]==5)
	{
$query2 = "select * from student5;" ;
	}
	if($_SESSION["ssemtv"]==6)
	{
$query2 = "select * from student6;" ;
	}
	
		$result = mysqli_query($con,$query);
		$num_rows = mysqli_num_rows($result);
		
		$result2 = mysqli_query($con,$query2);
		$num_rows2 = mysqli_num_rows($result2);
		
		
		$count=$cn=$totaldays=$tp=0;$Array=array();
		$cn = array();
		
		if($num_rows2>0){
		if($num_rows >0)
		{
					echo "<table cellpadding=\"15\" border=\"3\" name=\"tabstd\" align=\"center\">
<tr align=\"center\">
<th>PIN</th>
<th>Attendance Percentage</th>
</tr>		";
			
			
			
			
			while($row = mysqli_fetch_assoc($result))
			{
					if($_SESSION["ssemtv"]==$row["sem"]){
						$totaldays++;
					}
			}
			
			
			//echo $totaldays;
			
			while($row2 = mysqli_fetch_assoc($result2))
			{
				echo "<tr>
					<td>".$row2["pin"]."</td>
					";
			
			while($row = mysqli_fetch_assoc($result))
			{
				
					
					
					if($_SESSION["ssemtv"]==$row["sem"]){
					
					
					
					$str_arr = explode (",", $row["present stds"]);
					
					foreach ($str_arr as &$value)
					{
						if($value==$row2["pin"])
					{
						$count++;
						
						
						
						}
						array_push($cn,$count);
						$cmon=$count;
						
						}
										
					
					}			
			
			
				
			}
			
			$insert_data = implode(",", $cn);
			$arr2 = str_split($insert_data, 1);
			$thelastone=count($arr2)-1;
			
			$perc=$n/$totaldays;
				$tp=$perc*100;
					
					echo"<td>".$tp."</td>
					</tr>";
			
			}
				echo "</table>";	
		}
		}

?>