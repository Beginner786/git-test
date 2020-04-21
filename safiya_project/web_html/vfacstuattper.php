<?php
include("db_connect.php");
include("header.php");

session_start();

echo "<div align=\"left\">
					<a href=\"mrkatt.php\" style=\"text-decoration:none;color:white;\">Mark Attendance</a>
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