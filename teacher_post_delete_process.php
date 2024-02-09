<?php 
include('config.php');
$id=$_REQUEST['id'];
 $query="DELETE FROM pdf_file WHERE id='".$_REQUEST['id']."'";
 $result=mysqli_query($conn, $query);
 if($result) {
 header("Location:teacher_home.php");
 }
else
{
 echo "Error Generated";
}
mysqli_close($conn);
?>