<?php 
session_start();
include('config.php');
$email=$_REQUEST['email'];
 $query="DELETE FROM joined_students WHERE email='".$_REQUEST['email']."'";
 $result=mysqli_query($conn, $query);
 if($result) {
 header("Location:teacher_home.php");
 }
else
{
 echo "Error Generated";
}
?>