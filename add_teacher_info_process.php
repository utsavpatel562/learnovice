<?php 
session_start();
include('config.php');
$age = $_POST['age'];
$skills = $_POST['skills'];
$address = $_POST['address'];			
$qry = "INSERT INTO teacher_basic_info(email,age, skills, address)
        VALUES('".$_SESSION['user']."',".$age.",'".$skills."', '".$address."')";
		$result=mysqli_query($conn,$qry);
		if($result)
		{
			header("location:create_class.php");
		}
?>