<?php
include('config.php');
$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
//here query check weather if user already registered so can't register again.  
$check_email_query="SELECT * FROM registration WHERE email='$email'";  
$run_query=mysqli_query($conn,$check_email_query);  

if(mysqli_num_rows($run_query)>0)  
{ 
    header("location:admin_add_student.php?error2=1"); 
//echo "<script>alert('Email $email is already exist, Please try another one!')</script>";  
exit();  
}  
$qry = "INSERT INTO registration(fname, email, password)
        VALUES('".$fname."', '".$email."', '".$password."')";
$result = mysqli_query($conn, $qry);
if($result)
{
    header("location:view_user.php?success=1");   
}
else {
    echo "Something Went Wrong";
}
mysqli_close($conn);
?>