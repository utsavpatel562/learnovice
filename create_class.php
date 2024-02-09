<?php
session_start();
include('config.php');
include('teacher_header.php');
?>
<link rel="stylesheet" type="text/css" href="dist/css/teacher_create.css">
<link rel="stylesheet" type="text/css" href="css/teacher_input_file/style.css">
 <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
						<?php $qry4 = "SELECT * FROM teacher_basic_info WHERE email='".$_SESSION['user']."'";
$result2 = mysqli_query($conn,$qry4);
if($row2=mysqli_fetch_array($result2))
{
	?>
	<!--  IF code here-->
			 <center><div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-body p-4 text-center">
				  
				  
			<?php	$qry6 = "SELECT * FROM photos WHERE email='".$_SESSION['user']."' ORDER BY id DESC";
            $result2 = mysqli_query($conn,$qry6);
            if($row4=mysqli_fetch_array($result2))
            {
           	  ?>
	           <img src="image/<?php echo $row4[2];?>" width="100px" height="100px" style="border-radius:50%; border:7px double 
             #228b22;">
	        <?php
            }
            else
            {
	        ?>
	        <img src="img/User (1).png" width="60px"></a>
	       <?php
           }
           ?> 
					<h3 class="m-0 mb-1"><br><?php echo $row2[1];?></h3>
                    <div class="text-muted"><?php echo $row2[3];?></div>
                    <div class="mt-3">
                      <span class="badge bg-purple-lt">Teacher</span>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                    <a href="create_class_form.php" class="card-btn"><!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                    Create Class
                    </a>
                  </div>
                </div>
              </div></center>
	<?php
}
else
{
	?>
            <div class="col-12">       
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Basic Info</h3>
                </div>	
                <div class="card-body">
                 <form method="POST" action="add_teacher_info_process.php">
                    <div class="form-group mb-3 ">
                      <label class="form-label" style="color:#000;">Age</label>
                      <div >
                        <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="Enter Age" name="age">
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label" style="color:#000;">Skills</label>
                      <div >
                        <input type="text" class="form-control" placeholder="Enter your skills" name="skills">
                        <small class="form-hint">
                         Add your skills in your info section to show your Qulifications
                        </small>
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                       <div class="mb-3">
                            <label class="form-label" style="color:#000;">Address</label>
                            <textarea name="address" class="form-control" data-bs-toggle="autosize" placeholder="Enter valid address..."></textarea>
                          </div>
                    </div>
		<input type="reset" name="cancle" value="Cancle">
		<input type="submit" name="submit" value="Submit">
                  </form>
                </div>
              </div>
	<?php
}
?> 
            </div><br>
    </div></div></div></div>