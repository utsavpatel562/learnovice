<?php
// logic for inserting new teacher
include('config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$qulification = $_POST['qulification'];
$password = $_POST['password'];
//here query check weather if user already registered so can't register again.  
$check_email_query="SELECT * FROM teacher_registration WHERE email='$email'";  
$run_query=mysqli_query($conn,$check_email_query);  

if(mysqli_num_rows($run_query)>0)  
{ 
    header("location:admin_add_teacher.php?error2=1"); 
//echo "<script>alert('Email $email is already exist, Please try another one!')</script>";  
exit();  
}  
$qry = "INSERT INTO teacher_registration(name, email,number,qulification, password)
        VALUES('".$name."', '".$email."',".$number.",'".$qulification."', '".$password."')";
$result = mysqli_query($conn, $qry);
if($result)
{
    header("location:view_teacher.php?success=1");   
}
else {
    echo "Something Went Wrong";
}
mysqli_close($conn);
?>
