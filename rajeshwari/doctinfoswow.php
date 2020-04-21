<!DOCTYPE html>
<html>
<head>
<title>
table with database
</title>
</head>
<style type="text/css">
.pi {
	 font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;

}
.pi th{
	border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
	background-color:#d96459;
	color:white;
}

.pi tr:nth-child(even) {
	border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    color:black;
	background-color:#DCFEF7;
}
.pi tr:nth-child(odd) { 
	border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    color:black;
	background-color:#ffff;
}
</style>
<body>
<table class="pi">
<tr>
<th>NAME</th>
<th>Id</th>
<th>DOB</th>
<th>QUALIFICATION</th>
<th>SPECIALISTIN</th>
<th>EXPERIENCE</th>
<th>HOSPITAL</th>
<th>EMAIL</th>
<th>PHNO</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","registration");
if($conn->connect_error){
die("failed to connect".$conn->connect_error());
}	
$sql="SELECT NAME,Id,DOB,QUALIFICATION,SPECIALISTIN,EXPERIENCE,HOSPITAL,EMAIL,PHNO from mddoctor";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo"<tr><td>".$row["NAME"]."</td><td>".$row["Id"]."</td><td>".$row["DOB"]."</td><td>".$row["QUALIFICATION"]."</td><td>".$row["SPECIALISTIN"]."</td><td>".$row["EXPERIENCE"]."</td><td>".$row["HOSPITAL"]."</td><td>".$row["EMAIL"]."</td><td>".$row["PHNO"]."</td></tr>";	
	
}
echo"</table>"	;
	}
	else{
		
	echo"0rows"	;
	}
$conn->close();

?>
</table>
</body>
</html>