<?php 
include('config.php');
                   $number = $_POST['number'];
                   $address = $_POST['address'];
                   $gender = $_POST['gender'];
                   $hobbies = $_POST['hobbies'];
                   $skills = $_POST['skills']; 
                   $newqry = "INSERT INTO add_more(number, address, gender, hobbies, skills)
                   VALUES(".$number.", '".$address."', '".$gender."', '".$hobbies."', '".$skills."')";
                   $newresult = mysqli_query($conn, $newqry); 
                   if($newresult)
{
  echo header("location:add_more_user.php");
}
else {
    echo "Something Went Wrong";
}
?>