<?php 
include('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$qry = "INSERT INTO admin(email, password)
        VALUES('".$email."', '".$password."')";
$result = mysqli_query($conn, $qry);
if($result)
{
    header("location:admin_home.php");   
}
else {
    echo "Something Went Wrong";
}
mysqli_close($conn);
?>