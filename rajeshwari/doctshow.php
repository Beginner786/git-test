<!DOCTYPE html>
<html>
<head>
<title>
table with database
</title>
<style>
u{
 text color:red;
	
} 
</style></head><body>
<?php
$conn=mysqli_connect("localhost","root","","registration");
if($conn->connect_error){
die("failed to connect".$conn->connect_error());
}	
$sql="SELECT NAME,Id,DOB,QUALIFICATION,SPECIALISTIN,EXPERIENCE,HOSPITAL,EMAIL,PHNO from mddoctor";
$result=$conn->query($sql);
if($result->num_rows > 0){
while($row=$result->fetch_assoc()){
echo  "<br>".$row["NAME"]."<br>".$row["Id"]."<br>"."<br>".$row["QUALIFICATION"]."<br>".$row["SPECIALISTIN"]."<br>EXPERIENCE:".$row["EXPERIENCE"]."<br>".$row["HOSPITAL"]."<br>".$row["EMAIL"]."<br>".$row["PHNO"];	
strcopy(Dob,$row["DOB"]);
echo "Dob";
}	
//else{
		
	//echo"0rows"	;
	//}
$conn->close(); ?>	
</body>
</html>