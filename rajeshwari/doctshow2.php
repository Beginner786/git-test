<!DOCTYPE html>
<html>
<body>

<?php
$key1 = $_POST["search"];
$conn = mysqli_connect("localhost","root","","registration");
if (mysqli_connect_error($conn)) {
    die("Connection failed: " . mysqli_error($conn));
} 

$sql = "SELECT*FROM tablet where NAME='".$key1 ."'";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> Name: ". $row["NAME"]. "<br>ID: ". $row["ID"]. "<br>DOB: " . $row["DOB"]. "<br>Qualification: ". $row["QUALIFICATION"]. "<br>Specialist in: ". $row["SPECIALISTIN"]. "<br>Experience: ". $row["EXPERIENCE"]. "<br>Hospital: ". $row["HOSPITAL"]. "<br>MAIL: ". $row["EMAIL"]. "<br>PH: ". $row["PHNO"];
    }
} else {
   include('');
}

mysqli_close($conn);
?> 

</body>
</html> 