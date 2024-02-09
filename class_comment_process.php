<?php 
include('config.php');
$comment = $_POST['comment'];
$qry = "INSERT INTO class_comment_student(comment)
        VALUES('".$comment."')";
$result = mysqli_query($conn, $qry);
$row=mysqli_fetch_array($result);
if($result)
{
    header("location:user_viewClass.php");   
}
else {
    echo "Something Went Wrong";
}
?>