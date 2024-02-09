<?php
include('config.php');
session_start();
$email=$_REQUEST['email'];
?>
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
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
font-size: 16px;">&nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
<?php
$qry4 = "SELECT * FROM user_photo WHERE email='".$_SESSION['user']."' ORDER BY id DESC";
$result2 = mysqli_query($conn,$qry4);
if($row2=mysqli_fetch_array($result2))
{
	?><br>
	<img src="image/<?php echo $row2[2];?>" width="100px" style="margin-top:10px;">
	<?php
}
else
{
	?><br>
	<img src="img/User (1).png" width="60px"></a>
	<?php
}
?> 
 <a href="user_photo_upload.php">
                    <button  class="btn btn-warning">Upload Photo</button></a>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="userprofile.php"><i class="fa fa-dashboard fa-3x"></i>My Profile</a>
                        </li>
                     <li>
                        <a  href="user_section_course.php"><i class="fa fa-desktop fa-3x"></i>Courses</a>
                    </li>
                      <li>
                        <a  href="user_login_logs.php"><i class="fa fa-table fa-3x"></i>Web Chat App</a>
                    </li>
 <li  >
                        <a  href="user_join_class.php"><i class="fa fa-user fa-3x"></i>Join Class</a>
                    </li>	
                    <li  >
                        <a  href="add_more_user.php"><i class="fa fa-edit fa-3x"></i> Add More</a>
                    </li>				
					
					                   
                   
                  <li  >
                        <a  href="user_section_contactUs.php"><i class="fa fa-square-o fa-3x"></i>Contact Us</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Your Profile</h2>   
                      
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update your profile
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Edit Here</h3>
                                    <form role="form" method="POST" action="update_user_profile_process.php">
                                <?php
        $newqry = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
        $query=mysqli_query($conn, $newqry);
        while($row=mysqli_fetch_array($query))
        {
        ?>
                                        <div class="form-group">
                                            <label>Name</label>
                                       <input class="form-control" placeholder="<?php echo $row[1];  ?>" type="text" name="fname">
                                        </div>
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="<?php echo $row[2]; ?>" type="email" name="email" disabled>
                                        </div>
										<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="<?php echo $row[3]; } ?>" type="password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-default" name="submit">Update</button>
                                        <button type="reset" class="btn btn-primary" style="background:#228b22;">Reset</button>

                                    </form>                                
    </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-10">
                        <h3>From LearNovice</h3>
                         <p align="justify">
						   To Change Email ID you have to do Verification for verification <a style="text-decoration:none;" href="user_request_emailChange.php">Click here</a>.
                          </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>