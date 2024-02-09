<?php 
session_start();
include('config.php');
include('admin_header.php');
?>
<head>
    <link rel="stylesheet" href="dist/tablecss/style.css">
	<script>
    function myfuctions(){
	alert("Email ID Adready Exist");
    } 
	</script>
</head>
<body   <?php if(isset($_REQUEST['error2'])){ echo "onload='myfuctions()'"; }?>>
<div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <form action="admin_add_teacher_process.php" method="post" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Add New Teacher</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="row">

<div class="mb-3">
                              <label class="form-label">Teacher Name</label>
                              <input type="text" class="form-control" name="name" value="Learnovice" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Teacher Email</label>
                              <input type="email" class="form-control" name="email" value="learnovice@gmail.com" required>
                            </div>
<div class="mb-3">
                              <label class="form-label">Teacher Number</label>
                              <input type="number" class="form-control" name="number" value="9999999999" required>
                            </div>
<div class="mb-3">
                              <label class="form-label">Teacher Qulification</label>
                              <input type="text" class="form-control" name="qulification" value="Web Developer" required>
                            </div>							
                            <div class="mb-3">
                              <label class="form-label">Password</label>
                              <input type="password" class="form-control" name="password" value="learnovice" required><br>
							  <input class="btn btn-success" type="submit" name="submit" value="Add Teacher">
                            </div>
							</form>
</div></div></div></div></div></div></div></div><br><br>						