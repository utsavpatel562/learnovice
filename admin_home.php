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
<title>Admin|Learnovice</title>
<script>
    function myfuctions(){
	alert("Deleted Successfully...");
    } 
</script>
</head>
<body
  <?php if(isset($_REQUEST['error2'])){ echo "onload='myfuctions()'"; }?>>
<div class="page-wrapper">
       
        <div class="page-body">
          <div class="container-xl">
		  <h2 class="page-title">
                  Our Statics
				 <h3 class="page-title" style="font-size:14px;">
                  By Learnovice
                 </h3><br>
            </h2>
            <div class="row row-cards">
              <div class="col-md-6 col-lg-4">
			  			<a href="view_user.php" style="text-decoration:none;">
                <div class="card" style="background: linear-gradient(360deg, #000, #065dcf);">
                  <div class="card-body p-4 text-center">
				  <?php 
				  include('config.php');
				  $counter = "SELECT * FROM registration";
				  $counter_run = mysqli_query($conn, $counter);
				  if($counter_total = mysqli_num_rows($counter_run))
				  {
					  
				  ?>
				  <span style="width:60px; height:60px" class="avatar avatar-xl mb-3 avatar-rounded"><?php echo $counter_total;}?></span>
                    <h3 class="m-0 mb-1" style="font-size:20px; color:#fff;">Registered Students</h3>
                    <div class="mt-3">
                      <span class="badge bg-green-lt">Powered by Learnovice</span>
                    </div>
                  </div>
                  
                </div></a>
              </div>
              <div class="col-md-6 col-lg-4">
			  			  			<a href="view_teacher.php" style="text-decoration:none;">
                <div class="card" style="background: linear-gradient(360deg, #000, #ff3d37);">
                  <div class="card-body p-4 text-center">
				   <?php 
				  $counter2 = "SELECT * FROM teacher_registration";
				  $counter_run2 = mysqli_query($conn, $counter2);
				  if($counter_total2 = mysqli_num_rows($counter_run2))
				  {
					  
				  ?>
                    <span style="width:60px; height:60px;" class="avatar avatar-xl mb-3 avatar-rounded"><?php echo $counter_total2;}?></span>
                    <h3 class="m-0 mb-1"style="font-size:20px; color:#fff;">Registered Teacher</h3>
                    <div class="mt-3">
                      <span class="badge bg-green-lt">Powered by Learnovice</span>
                    </div>
                  </div>
                  
                </div></a>
              </div>
              <div class="col-md-6 col-lg-4">
			  			  			<a href="admin_view_course_enroll.php" style="text-decoration:none;">
                <div class="card"style="background: linear-gradient(360deg, #000, #d64df8);">
                  <div class="card-body p-4 text-center">
				   <?php 
				  $counter3 = "SELECT * FROM course_enroll";
				  $counter_run3 = mysqli_query($conn, $counter3);
				  if($counter_total3 = mysqli_num_rows($counter_run3))
				  {
					  
				  ?>
                    <span style="width:60px; height:60px;" class="avatar avatar-xl mb-3 avatar-rounded"><?php echo $counter_total3;}?></span>
                    <h3 class="m-0 mb-1"style="font-size:20px; color:#fff;">Course Enrolled User</h3>
                    <div class="mt-3">
                      <span class="badge bg-green-lt">Powered by Learnovice</span>
                    </div>
                  </div>
                  
                </div></a>
              </div>
              <div class="col-md-6 col-lg-4">
			  			  			<a href="view_block_user.php" style="text-decoration:none;">
                <div class="card"style="background: linear-gradient(360deg, #000, #008000);">
                  <div class="card-body p-4 text-center">
				   <?php 
				  $counter3 = "SELECT * FROM block_user";
				  $counter_run3 = mysqli_query($conn, $counter3);
				  if($counter_total3 = mysqli_num_rows($counter_run3))
				  {
					  
				  ?>
                    <span style="width:60px; height:60px;" class="avatar avatar-xl mb-3 avatar-rounded"><?php echo $counter_total3;}?></span>
                    <h3 class="m-0 mb-1"style="font-size:20px; color:#fff;">Blocked Students</h3>
                    <div class="mt-3">
                      <span class="badge bg-green-lt">Powered by Learnovice</span>
                    </div>
                  </div>
                  
                </div></a>
              </div>
              <div class="col-md-6 col-lg-4">
			  			  			<a href="admin_webchatapp.php" style="text-decoration:none;">
                <div class="card"style="background: linear-gradient(360deg, #000, #ffd700);">
                  <div class="card-body p-4 text-center">
				   <?php 
				  $counter3 = "SELECT * FROM web_stu";
				  $counter_run3 = mysqli_query($conn, $counter3);
				  if($counter_total3 = mysqli_num_rows($counter_run3))
				  {
					  
				  ?>
                    <span style="width:60px; height:60px;" class="avatar avatar-xl mb-3 avatar-rounded"><?php echo $counter_total3;}?></span>
                    <h3 class="m-0 mb-1"style="font-size:20px; color:#fff;">WebChat App Users</h3>
                    <div class="mt-3">
                      <span class="badge bg-green-lt">Powered by Learnovice</span>
                    </div>
                  </div>
                  
                </div></a>
              </div>
              <div class="col-md-6 col-lg-4">
			  			  			<a href="view_block_teacher.php" style="text-decoration:none;">
                <div class="card"style="background: linear-gradient(360deg, #000, #ff7f50);">
                  <div class="card-body p-4 text-center">
				   <?php 
				  $counter3 = "SELECT * FROM block_teacher";
				  $counter_run3 = mysqli_query($conn, $counter3);
				  if($counter_total3 = mysqli_num_rows($counter_run3))
				  {
					  
				  ?>
                    <span style="width:60px; height:60px;" class="avatar avatar-xl mb-3 avatar-rounded"><?php echo $counter_total3;}?></span>
                    <h3 class="m-0 mb-1"style="font-size:20px; color:#fff;">Blocked Teacher</h3>
                    <div class="mt-3">
                      <span class="badge bg-green-lt">Powered by Learnovice</span>
                    </div>
                  </div>
                  
                </div></a>
              </div>
               


      </div>
    </div><br>