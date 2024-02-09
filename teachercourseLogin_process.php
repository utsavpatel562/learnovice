<?php
session_start();
include('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$check_email_query="SELECT * FROM course_enroll WHERE email='$email'";  
$run_query=mysqli_query($conn,$check_email_query);  

if(mysqli_num_rows($run_query)>0)  
{ 
    header("location:teacher_course.php?error2=1"); 
//echo "<script>alert('Invalid Login Details')</script>";  
exit();  
}  
$myqry = "INSERT INTO course_enroll(email, password)
        VALUES('".$email."','".$password."')";
$myresult = mysqli_query($conn, $myqry);
if($myresult)
{
 $qry = "SELECT password FROM teacher_registration WHERE email='".$email."'";
 $result = mysqli_query($conn, $qry);
 $row = mysqli_fetch_array($result);
 if($row['password']==$password)
{
        header("location:c++_course_overview.php?success=2");
        session_start();
        $_SESSION['user']=$email;
}
else 
    {
        header("location:teacher_course.php?error=1");
    } 
}
mysqli_close($conn);
?>