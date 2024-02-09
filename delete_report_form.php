<?php 
include('config.php');
$email=$_REQUEST['email'];
 $query="DELETE FROM user_section_contactus WHERE email='".$_REQUEST['email']."'";
 $result=mysqli_query($conn, $query);
 if($result) {
 header("Location:user_report_problem.php");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>