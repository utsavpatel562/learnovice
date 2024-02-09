<?php
$conn = mysqli_connect("localhost","root","");
if(!$conn) {
    die(mysqli_error());
}
mysqli_select_db($conn, "learnovice");
?>