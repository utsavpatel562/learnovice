<?php 
session_start();
include('config.php');
$mycode=$_REQUEST['mycode'];
 $query="INSERT INTO joined_students(mycode, email)
         VALUES('".$_REQUEST['mycode']."', '".$_SESSION['user']."')";
 $result=mysqli_query($conn, $query);
 
 if($result) {
 header("Location:user_join_class.php");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>