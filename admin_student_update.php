<?php 
session_start();
include('config.php');
include('admin_header.php');
?>
<body>
<div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <form action="admin_student_update__process.php" method="post" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Update Student Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="row">

<div class="mb-3">
                              <label class="form-label">Student Name</label>
<?php 
$email=$_REQUEST['email'];
        $newqry = "SELECT * FROM registration WHERE email='".$_REQUEST['email']."'";
        $query=mysqli_query($conn, $newqry);
        while($row=mysqli_fetch_array($query))
        {       
?>							  
		<input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Student Email</label>
                              <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Password</label>
		<input type="text" class="form-control" name="password" value="<?php echo $row['password']; }?>" required><br>
							  <input class="btn btn-success" type="submit" name="submit" value="Update">
                            </div>
							</form>

</div></div></div></div></div></div></div></div>						