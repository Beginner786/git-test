<?php
	session_start();
	include "db_connect.php";
	
	
	$name =$_POST["title"];
	//$news = $_POST["news"];
	
	
	$target_dir = "media/gallery/";	
$filename = strtolower(basename($_FILES["img"]["name"]));
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$target_file1 = $target_dir . uniqid().".".$imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image

if(isset($_POST["submit"]) && isset($_FILES["img"])) {
    $check = getimagesize($_FILES["img"]['tmp_name']);
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
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file1)) {
        echo "The file ". $target_file1. " has been uploaded.";
		$memo = $target_file1;
	} else {
        echo "Sorry, there was an error uploading your file.";
	
    }
}
	
	if(mysqli_query($con, "INSERT INTO gallery(title,image,status,UploadedBy) VALUES('" . $name . "', '" . $target_file1. "',2,".$_SESSION['id'].")")) {
			
			echo "<script> alert('successfully uploaded....') </script>";
			echo  "<script>window.location.replace('/project/project/boost.php');</script>";
		} else {
			$errormsg = "Error";
		}
		?>