<?php 
include('config.php');
$email=$_REQUEST['email'];
 $query="DELETE FROM teacher_registration WHERE email='".$_REQUEST['email']."'";
 $result=mysqli_query($conn, $query);
 if($result) {
 header("Location:view_teacher.php");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>