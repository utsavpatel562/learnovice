<?php
include('config.php');
$mycode = $_POST['mycode'];
$qry = "SELECT * FROM create_class WHERE mycode='".$mycode."'";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
if($row['mycode']==$mycode)
{
	header("location:user_join_class.php?mycode=".$row['mycode']."");
}
else 
    {
		header("location:user_join_class.php?error2=1");
    }
mysqli_close($conn);
?>