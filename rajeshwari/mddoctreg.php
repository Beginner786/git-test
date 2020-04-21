<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"registration");
if(mysqli_connect_error($con))
{
	die("Failed to connect");
	
}
else
{
echo "connected";	
	
}
$name=$_POST["NAME"];
$doctorid=$_POST["DOCTORID"];
$dob=$_POST["DOB"];
$qualification=$_POST["QUALIFICATION"];
$specialistin=$_POST["SPECIALISTIN"];
$experience=$_POST["EXPERIENCE"];
$hospital=$_POST["HOSPITAL"];
$email=$_POST["EMAIL"];
$phno=$_POST["PHONE"];
$medinfousername=$_POST["MEDINFOUSERNAME"];
$password=$_POST["PASSWORD"];

if($name=='')
{
	echo"<script>alert('Enter your name')</script>";
}
if($doctorid=='')
{
	echo"<script>alert('Enter your email')</script>";
}
if($dob=='')
{
	echo"<script>alert('Enter your username')</script>";
}
if($qualification=='')
{
	echo"<script>alert('Enter your phno')</script>";
}
if($specialistin=='')
{
	echo"<script>alert('Enter your phno')</script>";
}
if($experience=='')
{
	echo"<script>alert('Enter your phno')</script>";
}
if($hospital=='')
{
	echo"<script>alert('Enter your phno')</script>";
}
if($email=='')
{
	echo"<script>alert('Enter your phno')</script>";
}
if($phno=='')
{
	echo"<script>alert('Enter your phno')</script>";
}
if($medinfousername=='')
{
	echo"<script>alert('Enter your phno')</script>";
}
if($password=='')
{
	echo"<script>alert('Enter your phno')</script>";
}
else{
$db="insert into mddoctor(NAME,ID,DOB,QUALIFICATION,SPECIALISTIN,EXPERIENCE,HOSPITAL,EMAIL,PHNO,MEDINFOUSERNAME,PASSWORD) 
values ('".$pic."''".$name."','".$doctorid."','".$dob."','".$qualification."','".$specialistin."','".$experience."','".$hospital."','".$email."','".$phno."','".$medinfousername."','".$password."');";
$authentic = mysqli_query($con,$db);
if(!($authentic))
{
	echo mysqli_error($con);
	
}
echo "";
}




//{
	//echo "rows inserted"."</br>";
//}
//else
//{
	//echo "not inserted";
//}


?>