<?php
   include('config.php');
   session_start();
 $email=$_REQUEST['email'];
 $fname=strval($_POST['fname']);
 $password=strval($_POST['password']);
 $upd="UPDATE registration SET fname='$fname',password='$password' WHERE email='".$_SESSION['user']."'";
 if(mysqli_query($conn, $upd))
 {
 header("Location:userprofile.php");
 }
mysqli_close($conn);
?>