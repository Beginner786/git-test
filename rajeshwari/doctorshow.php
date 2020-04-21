<?php
    $conn = new mysqli("localhost","root","","registration");
    if (!$conn) {
        die ('Could not connect: ' . mysqli_error());
    }
    //mysql_select_db ("registration", $conn);
    $result = mysqli_query ("select * from mddoctor where NAME = 'uday'");
    while ($row = mysqli_fetch_array ($result)) {
        echo $row['email'] . "<br />";
    }
    mysqli_close ($conn);
?>
