<?php 
include('config.php');
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php");
} 
include('for_user_header.php');
?>
<head>
<title>LearNovice</title>
	<!-- BOOTSTRAP STYLES-->
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->

</head>

<body class="antialiased">
    <div class="wrapper">
    <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  My Class
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-md-4" style="width:100%;">
                <div class="card">
                  <ul class="nav nav-tabs" data-bs-toggle="tabs">
                    <li class="nav-item">
                      <a href="#tabs-home-7" class="nav-link active" data-bs-toggle="tab">Stream</a>
                    </li>
                    <li class="nav-item">
                      <a href="#tabs-profile-7" class="nav-link" data-bs-toggle="tab">Classwork</a>
                    </li>
                    <li class="nav-item">
                      <a href="#tabs-people-7" class="nav-link" data-bs-toggle="tab">People</a>
                    </li>
                  </ul>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active show" id="tabs-home-7">
                        <div>
                        <?php
$id=$_REQUEST['id'];						
$qry5 = "SELECT * FROM create_class WHERE id='".$_REQUEST['id']."'";
$result5 = mysqli_query($conn,$qry5);
if($row5=mysqli_fetch_array($result5))
{ ?>
                            <!-- Block code here -->
              <div class="col-lg-6" style="width:100%;">
                <div class="card" style="background: linear-gradient(160deg,#7599ff, #fd6cb5); color:#fff; height:150px;">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <h2 class="card-title mb-1" style="font-size: 24px;">
                          <a href="myClass.php" class="text-reset"><?php echo $row5['subject']; ?></a>
                        </h2>
                        <div class="text-muted">
<a href="#" class="text-reset"><h3  style="color:#fff;"><?php echo $row5['section']; ?></h3></a>
						  <br><br><br>
                        </div>
                        <div class="mt-3">
                          <div class="row g-2 align-items-center">
                            <div class="col">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                      </div>
                    </div>
                  </div>
                </div>

<!-- Content Here -->
                            <div style="margin-top:10px;" class="input-group mb-2">
                                <input type="text" class="form-control" placeholder="Announce something to your class" style="height:45px;">
                                <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#modal-team">Share</button>
								    <div class="modal modal-blur fade" id="modal-team" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">LearNovice</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
            <div class="mb-10">
              <div class="row g-2">
                
              </div>
            </div>
            <div>
			<form action="class_comment_process.php" method="POST">
              <label class="form-label">Comment</label>
              <textarea name="comment" class="form-control"></textarea><br>
            <button name="submit" class="btn btn-primary" style="background:#228b22;">Share</button>
                      </form>
			</div>
          </div>
          <div class="modal-footer">
        

		  </div>
        </div>
      </div>
    </div>
								
                              </div>
<div class="col-lg-13">
                <div class="card" style="border:none;">
                  <div class="card-body">
                    <div class="row align-items-center">
                     
					 
<?php 
$sql = "SELECT * FROM pdf_file WHERE class_id='".$_REQUEST['id']."'";
$run = mysqli_query($conn, $sql);
if($row10  = mysqli_fetch_array($run))
{
	?>	

                <div class="card" style="background: whitesmoke; color:#000; height:150px;">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <h2 class="card-title mb-1" style="font-size: 24px;">
                          <a href="#" style="text-decoration:none;font-size:16px;" class="text-reset"><img src="img/user.png" width="40px;">
						&nbsp;<?php echo $row10['email'];?></a>
                        </h2>
                        <div class="text-muted">
						<?php 
$sql = "SELECT * FROM pdf_file WHERE class_id='".$_REQUEST['id']."'";
$run = mysqli_query($conn, $sql);
while($row0  = mysqli_fetch_array($run))
{
	?>	
                          <a href="teacher_work.php?class_id=<?php echo $row0['class_id']; }?>"  style="text-decoration:none;" class="text-reset"><h4  style="color:#000; margin-left:50px;"><?php echo $row10['work_title'];?> : <b class="badge bg-green-lt"><?php echo $row10['pdf'];?></b></h4></a>
						 
					
						 
						 
						 
						 
						  <input class="form-control" type="text" placeholder="Add a class comment..."><br><br><br>
                        </div>
                        <div class="mt-3">
                          <div class="row g-2 align-items-center">
                            <div class="col">
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
	
<?php }
else 
{?>	
                      <div class="col">
                        <h3 class="card-title mb-1">
                          <a href="#" class="text-reset" style="text-decoration:none;"><h2 style="color:#228b22; font-size:25px;">This is where you'll see updates for this class</h2></a>
                        </h3>
						<div class="text-muted">
                        Use the stream to connect with your class and check for announcements
                        </div>
                      </div>
<?php }?>					  
					  
					  
					  
					  
                    </div>
                  </div>
                </div>
              </div><br><br>

                          </div>
                        </div>
                      </div>


                      
                      <div class="tab-pane" id="tabs-profile-7">
                        <div>
<?php

$sql = "SELECT * FROM pdf_file WHERE class_id='".$_REQUEST['id']."'";
$run = mysqli_query($conn, $sql);
if($row11  = mysqli_fetch_array($run))
{
?>						
<div class="card" style="background: whitesmoke; color:#000; height:150px;">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <h2 class="card-title mb-1" style="font-size: 24px;">
                          <a href="#" style="text-decoration:none;font-size:16px;" class="text-reset"><img src="img/user.png" width="40px;">
&nbsp;Submit your Answer of: <b class="badge bg-green-lt">
<?php echo $row11['pdf']; ?></b></a>
						<button class="btn btn-warning" style="height:30px; margin-left:30px;">Submit</button>
                        </h2>
                        <div class="text-muted">
                          
			
						 
						 
						 
						 <br>
						  <input class="form-control" type="text" placeholder="Add Private Comment to your teacher..."><br><br><br>
                        </div>
                        <div class="mt-3">
                          <div class="row g-2 align-items-center">
                            <div class="col">
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>	
<?php } else {?>
                        <div class="card-body text-center py-4 p-sm-5">
						
            <img src="img/addwork.jpg" class="mb-n2" width="280"  alt="">
			<h1 class="mt-5">Your teacher has't assigned any classwork yet...</h1>
</div>  <?php }?>

			
                        </div>
                      </div>
					  
					  
					  
					  
                      <div class="tab-pane" id="tabs-people-7">
                        <div>
                        <div class="col-12">
				<h2 style="font-size: 24px;color:#228b22;">Teacher</h2>
		<table>		
		<tr>
		<td>
		<img src="img/user.png" width="35px">
		</td>
		<td>
		&nbsp;<p style="font-size:18px; margin-left:5px; font-weight:600;"> <?php echo $row5['email']; }?></p>
		</td></tr>
		</table>
				<hr>
                <div class="card">
				<table style="overflow-x:auto;" class="table table-dark">
				<thead>
				<tr>
					<th scope="row">Learnovice ID</th>
				    <th scope="row">Student ID</th>
					<th scope="row"></th>
				</tr>
				</thead>
				<tbody>				
					<?php		
		$sql="SELECT * FROM create_class WHERE id='".$_REQUEST['id']."'";
		$qry=mysqli_query($conn, $sql);
		if($row=mysqli_fetch_array($qry))
		{
		$newqry = "SELECT * FROM joined_students";
        $query=mysqli_query($conn, $newqry);
        while($row3=mysqli_fetch_array($query))
		    if($row['mycode'] == $row3['mycode']) 
		{?>				   <tr>	
	    <td><?php echo $row3['id'];?></td>
		<td><?php echo $row3['email']; ?></td>
		<td><img width="32px" style="cursor:pointer;" src="img/mymail.png"></td>
		<?php } }?> 		
				   </tr>
				 </tbody>
				</table>
				

                </div>
              </div>                         
                        </div>
                      </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>