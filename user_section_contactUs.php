<?php include('config.php');
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php");
} ?>
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">LearNovice</a> 
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
<?php
$qry4 = "SELECT * FROM user_photo WHERE email='".$_SESSION['user']."' ORDER BY id DESC";
$result2 = mysqli_query($conn,$qry4);
if($row2=mysqli_fetch_array($result2))
{
	?><br>
	<img src="image/<?php echo $row2[2];?>" width="100px" style="margin-top:10px; border-radius:50%">
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
                        <a  href="add_more_user.php"><i class="fa fa-edit fa-3x"></i> Add More</a>
                    </li>				
					
					                   
                    <li>
                        <a href="user_join_class.php"><i class="fa fa-user fa-3x"></i>Join Class</span></a>
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
                     <h2>Contact Us</h2>   
                     <?php
        $newqry = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
        $query=mysqli_query($conn, $newqry);
        while($row=mysqli_fetch_array($query))
        {
        ?>
                        <h5>Welcome  <?php echo $row[1]; ?>, Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Get in touch with us
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST" action="user_section_contactUs_process.php" role="form">
                                    <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Your Name</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $row[1]; ?>" disabled />
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Your Email</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $row[2]; }?>" disabled />
                                            </div>    
                                        </fieldset>
                                        <div class="form-group">
                                            <label>Suject</label>
                                            <input class="form-control" name="subject" placeholder="Subject of contact us" />
                        
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <textarea class="form-control" name="comment" rows="3" placeholder="Your comment here..."></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-success" value="Send" style="width:100px;">
        </form>
                                        
                                       
                </div>
            </div>
                <!-- /. ROW  --><br>
                <div class="row">
                    <div class="col-md-12">
                        <h3>From Learnovice</h3>
                         <p>
                        For any account related problems and glitches and data lost please report and get us to know and <a href="http://getbootstrap.com/components/" target="_blank">click here</a> .We will response you soon. We hope you will enjoy our service.  
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
