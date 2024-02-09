<?php 
include('config.php');
$email=$_REQUEST['email'];
 $query="INSERT block_user SELECT * FROM registration WHERE email='".$_REQUEST['email']."'";
 $result=mysqli_query($conn, $query);
 
$query2="DELETE FROM registration WHERE email='".$_REQUEST['email']."'";
 $result2=mysqli_query($conn, $query2);
 if($result2) {
 header("Location:view_user.php");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>