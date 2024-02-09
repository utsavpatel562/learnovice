<?php
include('config.php');
session_start();
$id  = $_REQUEST['id'];
$code = $_POST['code'];					
$qry = "INSERT INTO teacher_class_code(unique_id,email,code)
        VALUES('".$_REQUEST['id']."','".$_SESSION['user']."','".$code."')";
		$result=mysqli_query($conn,$qry);
		if($result)
		{
			header("location:viewClass.php");
		}
?>