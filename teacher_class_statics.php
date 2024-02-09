<head>
<link rel="stylesheet" href="dist/tablecss/style.css">
    <link href="css/teacher_scroll.css" rel="stylesheet">
<!-- BOOTSTRAP STYLES-->
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
</head>
<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php");
} 
include('config.php');
include('teacher_header.php');
?>
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                Class Statics
				</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-md-15">
                <div class="card">
                  <ul class="nav nav-tabs" data-bs-toggle="tabs">
                    <li class="nav-item">
                      <a href="#tabs-home-7" class="nav-link active" data-bs-toggle="tab">Responses</a>
                    </li>
                    <li class="nav-item">
                      <a href="#tabs-profile-7" class="nav-link" data-bs-toggle="tab">Edit Class</a>
                    </li>
                   
                  </ul>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active show" id="tabs-home-7">
                        <div><h3>Students Responses</h3></div>
                        <div style="overflow-x: auto;">
<table class="table table-dark">
<tr>
<th scope="col">Learnovice ID</th>
<th scope="col">Email ID</th>
<th scope="col">Class ID</th>
<th scope="col">Document</th>
<th scope="col">View Doc.</th>
<th scope="col">Delete Doc.</th>
</tr>
<tbody>
<?php 
$sql = "SELECT * FROM student_pdf_file WHERE class_id='".$_REQUEST['class_id']."'";
 $check = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($check))
 {?>
	 <tr>
	 <td>#<?php echo $row['id']; ?></td>
	 <td><?php echo $row['email']; ?></td>
	 <td><?php echo $row['class_id'];?></td>
    <td><?php echo $row['pdf'];?></td>
     <td><a href="#" data-bs-toggle="modal" data-bs-target="#modal-full-width" style="text-decoration:#fff;"><button class="btn3">View File</a></td>
	<td><button class="btn2">Delete</button></td>


<div class="modal modal-blur fade" id="modal-full-width" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
 <h5 class="modal-title"><?php echo $row['pdf']; ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          
 <center><embed type="application/pdf" src="student_class_pdf/<?php echo $row['pdf']; }?>" width="500" height="800">
    </center>
	
          </div>
        </div>
      </div>
    </div>

</tr>
</tbody>
</table></div>
                      </div>
                      <div class="tab-pane" id="tabs-profile-7">
                        <div><h3>Update Class Info</h3></div>
                        <div class="col-md-12"style="margin-top:20px;">
              <div class="card">
				
<?php $class_id = $_REQUEST['class_id'];
$queryfire="SELECT * FROM pdf_file WHERE class_id='".$_REQUEST['class_id']."'";
$check=mysqli_query($conn, $queryfire);
while($row=mysqli_fetch_array($check)) {
 ?>
                <div class="card-body">
                  <form action="update_insert_pdf.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3 row">
                      
                    <div class="col">
                        <input type="text" name="work_title" class="form-control" value="<?php echo $row['work_title']; }?>">
                        <small class="form-hint">Add a title to your work assign.</small>
                      </div>              
                      <div class="col">
                        <input id="pdf" type="file"  name="pdf" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
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
				   <?php $class_id = $_REQUEST['class_id'];
$queryfire="SELECT * FROM pdf_file WHERE class_id='".$_REQUEST['class_id']."'";
$check=mysqli_query($conn, $queryfire);
while($row=mysqli_fetch_array($check)) {
 ?>
<form action="teacher_post_delete_process.php?id=<?php echo $row['id']; }?>" method="POST" enctype="multipart/form-data">
<br><input type="submit"/ name="submit" class="btn btn-danger" value="Delete Post">
 </form>
                </div>
			  
			  
</div>
</div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>