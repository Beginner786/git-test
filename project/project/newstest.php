<?php
	session_start();
	include "db_connect.php";
	require("src/mail_news.php");
	
	$title =$_POST["title"];
	//$news = $_POST["news"];
	$desc = $_POST["desc"];
	
	$target_dir = "media/news/";	
$filename = strtolower(basename($_FILES["news"]["name"]));
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$target_file1 = $target_dir . uniqid().".".$imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image

if(isset($_POST["submit"]) && isset($_FILES["news"])) {
    $check = getimagesize($_FILES["news"]['tmp_name']);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}else{
	$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. Make sure image is below 5mb";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["news"]["tmp_name"], $target_file1)) {
        echo "The file ". $target_file1. " has been uploaded.";
		$memo = $target_file1;
	} else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	$query = mysqli_query($con, "INSERT INTO news(news_title,image,news_desc,createdBy,status) VALUES('" . $title . "', '" . $target_file1. "', '" . $desc . "',".$_SESSION["id"].",1)");	
	$q = mysqli_query($con,"select * from users where status=2");
	$num_rows = mysqli_num_rows($q);
	if($query) 
	{	
		if($num_rows >0)
		{
		while($row = mysqli_fetch_assoc($q))
			{	
				$u_mail = $row["user_email"];
				$n_mail = $title; 
				mailTo($u_mail,$n_mail);
			}
		}
		echo '<script> alert("Sucessfully upload"); </script>  ';
	}	
	else
	{
			$errormsg = "Error";
	}
?>