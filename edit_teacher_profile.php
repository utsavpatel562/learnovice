<?php 
session_start();
include('config.php');
include('teacher_header.php');
$email=$_REQUEST['email'];
?>
<br>
      <div>
      <div class="container-xl">
            <div class="row row-cards">
      <div class="col-12">       
            <div class="col-md-6"  style="margin:auto">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Update Your Profile</h3>
                </div>	
				
                <div class="card-body">
                 <form method="POST" action="update_teacher_profile_process.php">
				 <?php
				  $newqry = "SELECT * FROM teacher_registration WHERE email='".$_REQUEST['email']."'";
        $query=mysqli_query($conn, $newqry);
        while($row=mysqli_fetch_array($query))
        {
        ?>
                    <div class="form-group mb-3 ">
                      <label class="form-label" style="color:#000;">Name</label>
                      <div>
					  
		<input type="text" required class="form-control" value="<?php echo $row['name']; ?>" name="name" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label" style="color:#000;">Email</label>
                      <div >
                        <input type="text" required class="form-control" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>" name="email" autocomplete="off" readonly>
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label" style="color:#000;">Contact no.</label>
                      <div >
                        <input type="number" class="form-control"  required value="<?php echo $row['number']; ?>" name="number" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label" style="color:#000;">Qulification</label>
                      <div >
                        <input type="text" class="form-control" value="<?php echo $row['qulification']; ?>" name="qulification" required autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                       <div class="mb-3">
                            <label class="form-label" style="color:#000;">Password</label>
		<input type="text" name="password" class="form-control" data-bs-toggle="autosize" value="<?php echo $row['password']; }?>" required>
                          </div>
                    </div>
		            <input type="submit" name="submit" value="Update Profile" class="btn btn-success">
                  </form>
                </div>
              </div><br><br>