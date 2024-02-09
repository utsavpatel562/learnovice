<?php
   include('config.php');
   session_start();
 $email=$_REQUEST['email'];
 $fname=strval($_POST['fname']);
 $password=strval($_POST['password']);
 $upd="UPDATE registration SET fname='$fname',password='$password' WHERE email='".$_REQUEST['email']."'";
 if(mysqli_query($conn, $upd))
 {
 header("Location:view_user.php?updated=1");
 }
mysqli_close($conn);
?>