<?php 
session_start();
if(!isset($_SESSION['user']))
{
	header("location:admin.php");
}   
include('config.php');
include('admin_header.php');
?>
<head>
    <link rel="stylesheet" href="dist/tablecss/style.css">
</head>
<div class="page-wrapper">
        
        <div class="page-body">
          <div class="container-xl">
		  <h2 class="page-title">
                  Student's review and complain 
				 <h3 class="page-title" style="font-size:14px;">
                  By Learnovice
                 </h3><br>
            </h2>
<br>
<div style="overflow-x: auto;">
<table class="table table-dark">
<tr>
<th scope="col">Learnovice ID</th>
<th scope="col">Email ID</th>
<th scope="col">Subject</th>
<th scope="col">Comment</th>
<th scope="col">Delete Data</th>
</tr>
<tbody>
<?php 
$sql = "SELECT * from user_section_contactus";
 $check = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($check))
 {
	 echo "<tr>";
	 echo "<td>#".$row['id']."</td>";
	 echo "<td>".$row['email']."</td>";
	 echo "<td>".$row['subject']."</td>";
	 echo "<td>".$row['comment']."</td>";
	 echo "<td><button class=btn2><a href=delete_report_form.php?email=".$row['email'].">Delete</a></td>";
 }
?>
</tr>
</tbody>
</table>
</div>