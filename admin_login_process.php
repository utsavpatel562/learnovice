<?php
// admin login process auth.
include('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$qry = "SELECT password FROM admin WHERE email='".$email."'";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
if($row['password']==$password)
{
        header("location:admin_home.php");
        session_start();
        $_SESSION['user']=$email;
}
else 
    {
        header("location:admin.php?error=1");
    }
mysqli_close($conn);
?>
