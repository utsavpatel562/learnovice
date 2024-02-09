<?php
include('config.php');
session_start();
$mycode = $_POST['mycode'];
$title = $_POST['title'];
$section = $_POST['section'];
$subject = $_POST['subject'];			
$description = $_POST['description'];			
$qry = "INSERT INTO create_class(email,mycode,title, section, subject, description)
        VALUES('".$_SESSION['user']."','".$mycode."','".$title."','".$section."', '".$subject."','".$description."')";
		$result=mysqli_query($conn,$qry);
		if($result)
		{
			header("location:teacher_home.php");
		}
?>