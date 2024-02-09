<?php 
include('config.php');
$email=$_REQUEST['email'];
 $query="DELETE FROM admin WHERE email='".$_REQUEST['email']."'";
 $result=mysqli_query($conn, $query);
 if($result) {
 header("Location:admin_home.php?success=1");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>