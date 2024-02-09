<?php 
session_start();
include('config.php');
include('admin_header.php');
?>
</script>
	<script>
    function myfuction(){
    alert("Email is already exist, Please try another one!);
    } 
</script>
<body <?php if(isset($_REQUEST['error2'])){ echo "onload='myfuction()'"; }?>	>
<div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <form action="admin_add_student_process.php" method="post" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Add New Student</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="row">

<div class="mb-3">
                              <label class="form-label">Student Name</label>
                              <input type="text" class="form-control" name="fname" value="Learnovice" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Student Email</label>
                              <input type="email" class="form-control" name="email" value="learnovice@gmail.com" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Password</label>
                              <input type="password" class="form-control" name="password" value="learnovice" required><br>
							  <input class="btn btn-success" type="submit" name="submit" value="Add Student">
                            </div>
							</form>

</div></div></div></div></div></div></div></div>						