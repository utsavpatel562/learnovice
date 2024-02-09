<?php
include('config.php');
session_start();
$subject = $_POST['subject'];
$commment = $_POST['comment'];					
$qry = "INSERT INTO user_section_contactus(email,subject, comment)
        VALUES('".$_SESSION['user']."','".$subject."','".$comment."')";
		$result=mysqli_query($conn,$qry);
		if($result)
		{
			header("location:user_section_contactUs.php");
		}
?>