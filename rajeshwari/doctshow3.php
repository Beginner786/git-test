<?php
if(isset($_REQUEST['submit'])){
$key1 = $_POST["tabletsearch"];
$conn = mysqli_connect("localhost","root","","registration");
if (mysqli_connect_error($conn)) {
    die("Connection failed: " . mysqli_error($conn));
} 

$sql = "SELECT*FROM tablet where TABLETNAME='".$key1 ."'";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>TABLET_NAME: ". $row["TABLETNAME"]. "<br>USES_FOR: ". $row["USESFOR"]. "<br>COMPANY_NAME: " . $row["COMPANY"]. "<br>COST: ". $row["COST"]. "<br>DOSAGE: ". $row["DOSAGE"]. "<br>DESCRIPTION: ". $row["DESCRIPTION"];
    }
} else {
    echo "Error_200[NO SUCH USER EXISTS TRY WITH ANOTHER NAME]";
}

mysqli_close($conn);
}
else{
	//echo "what is happened????";
	
}
?> 
