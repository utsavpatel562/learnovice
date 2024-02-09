<?php 
include('config.php');
$email=$_REQUEST['email'];
 $query="INSERT block_teacher SELECT * FROM teacher_registration WHERE email='".$_REQUEST['email']."'";
 $result=mysqli_query($conn, $query);
 
$query2="DELETE FROM teacher_registration WHERE email='".$_REQUEST['email']."'";
 $result2=mysqli_query($conn, $query2);
 if($result2) {
 header("Location:view_teacher.php");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>