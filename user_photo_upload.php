<?php include('config.php');
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php");
} 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learnovice | User Profile</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LearNovice</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="css/mofication.css" type="text/css" rel="stylesheet" />
    
    
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="background:#228b22;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse" style="background:#000;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Learnovice</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="img/user.png" class="user-image img-responsive"/>
<a href="user_photo_upload.php"><button  class="btn btn-warning">Upload Photo</button></a>
				
                </li>
                
				
					
                    <li>
                        <a class="active-menu"  href="userprofile.php"><i class="fa fa-dashboard fa-3x"></i>My Profile</a>
                    </li>
                     <li>
                        <a  href="user_section_course.php"><i class="fa fa-desktop fa-3x"></i>Courses</a>
                    </li>
                    <li>
                        <a  href="user_payment.php"><i class="fa fa-qrcode fa-3x"></i> Payment</a>
                    </li>
						   	
                      <li>
                        <a  href="user_login_logs.php"><i class="fa fa-table fa-3x"></i>Web Chat App</a>
                    </li>
                    <li  >
                        <a  href="add_more_user.php"><i class="fa fa-edit fa-3x"></i> Add More</a>
                    </li>				
					
					                   
                    <li>
                        <a href="user_join_class.php"><i class="fa fa-user fa-3x"></i>Join Class</a>
                      </li>  
                  <li  >
                        <a  href="user_section_contactUs.php"><i class="fa fa-square-o fa-3x"></i>Contact Us</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Photo Upload</h2>   
                        <h5><?php
$newqry3 = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
        $query3=mysqli_query($conn, $newqry3);
        while($row3=mysqli_fetch_array($query3))
        {				?>	
		<h5>Welcome  <?php echo $row3['fname']; }?> , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
                      <div class="col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Add Photo in your account
                        </div>        
                                      
                                    <div class="panel-body"> 
                                    <form method="POST" action="user_upload.php" enctype="multipart/form-data">
                   <input type="file" name="fileToUpload" id="fileToUpload"><br>
                   <input class="btn btn-success" type="submit" name="submit" value="Upload">

                   
                </div>
            </div>
                          </div>
                           <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    