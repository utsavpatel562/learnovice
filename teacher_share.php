<?php 
session_start();
include('config.php');
include('teacher_header.php');
?>
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                Share something with your class
                </div>
                <h2 class="page-title">
                Upload File
                </h2>
              </div>
			              <div class="col-md-12"style="margin-top:20px;">
              <div class="card">
                <div class="card-header">
				
			<?php
$id = $_REQUEST['id'];			
			$sql = "SELECT * FROM create_class WHERE id='".$_REQUEST['id']."'";
 $check = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($check))
 {?>
 <h3 class="card-title">Sharing Files in <strong style="color:#228b22;"><?php echo $row['subject']; ?></strong> Classroom</h3>
                </div>
                <div class="card-body">
                  <form action="insert_pdf.php?id=<?php echo $row['id'];}?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3 row">
                      
                    <div class="col">
                        <input type="text" name="work_title" class="form-control" placeholder="Add your title here">
                        <small class="form-hint">Add a title to your work assign.</small>
                      </div>              
                      <div class="col">
                        <input id="pdf" type="file" name="pdf" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                        <small class="form-hint">Upload your file in PDF Format, MAX 10 MB is allowed to upload PDF file.</small>
                      </div>
                    </div><br>
                    <div class="mb-3">
                            <div class="form-label">Do you want to take responses from student?</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="add_btn" value="Yes">
                                <span class="form-check-label">Yes</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="add_btn" value="No">
                                <span class="form-check-label">No</span>
                              </label>                              
                              
                            </div>
                          </div>
                   
                  
                    <div class="form-footer">					
 <input type="submit" value="Upload File" class="btn btn-success" name="submit">
                    </div>
                  </form>
                </div>
			  
			  
</div>
</div>
</div>
</div>	
</div>		  