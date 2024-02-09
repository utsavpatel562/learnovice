<?php 
include('config.php');
$email=$_REQUEST['email'];
 $query="DELETE FROM course_enroll WHERE email='".$_REQUEST['email']."'";
 $result=mysqli_query($conn, $query);
 if($result) {
 header("Location:teacher_course.php");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>