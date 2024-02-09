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
<script>
    function myfuctions(){
	alert("Your Reponse Successfully Recorded.");
    } 
</script>
</head>

<body class="antialiased" <?php if(isset($_REQUEST['success'])){ echo "onload='myfuctions()'"; }?>
    <div class="wrapper">
    <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-md-4" style="width:100%;">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="tab-content">
                     		     <?php
$class_id=$_REQUEST['class_id'];						
$qry5 = "SELECT * FROM pdf_file WHERE class_id='".$_REQUEST['class_id']."'";
$result5 = mysqli_query($conn,$qry5);
if($row5=mysqli_fetch_array($result5))
{ ?>
                    <div class="row align-items-center">
                      <div class="col">
                        <h2 class="card-title mb-1" style="font-size: 24px;">
                          <a href="#" style="text-decoration:none;font-size:16px;" class="text-reset"><img src="img/user.png" width="40px;">
&nbsp;<?php echo $row5['email'];?></a><hr style="background:#ca0000;">
                        </h2>
						 <?php 
					  $date_function = date("F j, Y");
					  echo "Viewing on ".$date_function;
					  ?>
					  <h3>Attachments</h3>
                      <div style="background:whitesmoke; padding:10px;border-radius:5px; height:auto;"><b><?php echo $row5['work_title'];?></b>
<br><br><a href="#" data-bs-toggle="modal" data-bs-target="#modal-full-width" style="text-decoration:none;"><div class="badge bg-orange-lt" style="height:55px; width:auto; padding:10px; font-size:12px;"><?php echo $row5['pdf']; ?></div></a>

						 <div class="modal modal-blur fade" id="modal-full-width" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?php echo $row5['pdf'];?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          
      <center><embed type="application/pdf" src="class_pdf/<?php echo $row5['pdf']; ?>" width="500" height="800">
    </center>
	
          </div>
        </div>
      </div>
    </div>





<?php
if($row5['add_btn']=="Yes")
{
	?>
	
	<br><br><br>
	<h3>Send Your Answer</h3>
	<?php
$qry10 = "SELECT * FROM pdf_file";
$result10 = mysqli_query($conn,$qry10);
while($row10=mysqli_fetch_array($result10))
{ ?>
<form  method="POST" action="student_insert_pdf.php?class_id=<?php echo $row10['class_id'];}?>">
<input id="pdf" type="file" name="pdf" class="form-control" required>
                        <small class="form-hint">Upload your file in PDF Format, MAX 10 MB is allowed to upload PDF file.</small>	
	<br><input type="submit" name="submit" class="btn btn-primary" value="Submit Work">
	</form>
	<?php
}
else {
	echo "";
}
}
?>


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