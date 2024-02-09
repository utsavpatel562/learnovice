<?php
include('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$qry = "SELECT password FROM teacher_registration WHERE email='".$email."'";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
if($row['password']==$password)
{
        header("location:teacher_home.php");
        session_start();
        $_SESSION['user']=$email;
}
else 
    {
        header("location:teacher_login.php?error=1");
    }
mysqli_close($conn);
?>