<?php
include("db_connect.php");
require("src/sendmail.php");
//Capturing post requests
$fname = htmlentities((mysqli_real_escape_string($con, $_POST["fname"])));
$lname = htmlentities((mysqli_real_escape_string($con,  $_POST["lname"])));
$email =  htmlentities((mysqli_real_escape_string($con, $_POST["email"])));
$gender = htmlentities((mysqli_real_escape_string($con,  $_POST["gender"])));
$p_h = $_POST["psw"];
$pass = hash('md5',$p_h);
echo $pass;
$phn =  htmlentities((mysqli_real_escape_string($con, $_POST["phn"])));
$pin_year =  htmlentities((mysqli_real_escape_string($con, $_POST["pin_year"])));
$pin_branch =  htmlentities((mysqli_real_escape_string($con, $_POST["pin_branch"])));
$pin_num =  htmlentities((mysqli_real_escape_string($con, $_POST["pin_num"])));
//Image upload
//memo


//-------------------------------------------------------------------------------------
$target_dir = "alumni/media/users/memo/";	
$filename = strtolower(basename($_FILES["memo"]["name"]));
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$target_file1 = $target_dir . uniqid().".".$imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image

if(isset($_POST["submit"]) && isset($_FILES["memo"])) {
    $check = getimagesize($_FILES["memo"]['tmp_name']);
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
    if (move_uploaded_file($_FILES["memo"]["tmp_name"], $target_file1)) {
        echo "The file ". $target_file1. " has been uploaded.";
		$memo = $target_file1;
	} else {
        echo "Sorry, there was an error uploading your file.";
    }
}
#---------------------------------------------------------------------------------------
//Passport photo
$target_dir = "alumni/media/users/";	
$filename = strtolower(basename($_FILES["pass_photo"]["name"]));
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$target_file = $target_dir . uniqid().".".$imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image

if(isset($_POST["submit"]) && isset($_FILES["pass_photo"])) {
    $check = getimagesize($_FILES["pass_photo"]['tmp_name']);
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
    if (move_uploaded_file($_FILES["pass_photo"]["tmp_name"], $target_file)) {
        echo "The file ". $target_file. " has been uploaded.";	
		$avatar = $target_file;
	} else {
        echo "Sorry, there was an error uploading your file.";
    }
}
#-----------------------------

//database entry
$query = "insert into users(user_fname,user_lname,user_gender,pin_year,pin_branch,pin_num,user_email,password,avatar,memo,user_phone,status,role_id) values('".$fname."','".$lname."','".$gender."','".$pin_year."','".$pin_branch."','".$pin_num."','".$email."','".$pass."','".$avatar."','".$memo."','".$phn."',2,1)";
if(!(mysqli_query($con,$query)))
{
	$err = mysqli_error($con);
	echo $err;
	//echo strcmp($err,'Duplicate entry');
	if(strcmp($err,'Duplicate entry'))
	{
		echo "<script>alert('Seems an user with given Email already exists');window.location.replace('/project/project/register.php');</script>";
		
	}
	else
	{
		echo mysqli_error($con);
		
	}
		
}
else{
	$u_name = $fname." ".$lname;
	mailTo(html_entity_decode($email),'new_user',$u_name);
	echo "<script>alert('Registration Successful');window.location.replace('/project/project/home.php');</script>";
}






?>