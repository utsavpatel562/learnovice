<?php 
include('config.php');
$name=strval($_POST['name']);
 $number = $_POST['number'];
  $qulification=strval($_POST['qulification']);
 $password=strval($_POST['password']);
 $upd="UPDATE teacher_registration SET name='$name', number='$number',qulification='$qulification', password='$password' WHERE email='".$_REQUEST['email']."'";
 if(mysqli_query($conn, $upd))
 {
	header("location:teacher_home.php");
 }else {
	 echo "Some Error Occured Utsav";
 }
 ?>