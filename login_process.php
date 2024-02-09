<?php
include('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$qry = "SELECT password FROM registration WHERE email='".$email."'";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
if($row['password']==$password)
{
        header("location:userprofile.php");
        session_start();
        $_SESSION['user']=$email;
}
else 
    {
        header("location:login.php?error=1");
    }
mysqli_close($conn);
?>