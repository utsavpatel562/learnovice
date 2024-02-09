<?php 
include('config.php');
$email=$_REQUEST['email'];
 $query="DELETE FROM web_stu WHERE email='".$_REQUEST['email']."'";
 $result=mysqli_query($conn, $query);
 if($result) {
 header("Location:admin_webchatapp.php");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>