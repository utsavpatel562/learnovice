<?php
include('config.php');
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
    <title>Learnovice</title>
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
                <a class="navbar-brand" href="index.html">LearNovice</a> 
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
	?>
	<img src="image/<?php echo $row2[2];?>" width="100px" style="margin-top:20px; border-radius:50%">
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
					<li>
                        <a  href="user_join_class.php"><i class="fa fa-user fa-3x"></i>Join Class</a>
                    </li>
                    <li  >
                        <a  href="add_more_user.php"><i class="fa fa-edit fa-3x"></i> Add More</a>
                    </li>		
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
                     <h2>Add More to Know More</h2>   
					 <?php
$newqry3 = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
        $query3=mysqli_query($conn, $newqry3);
        while($row3=mysqli_fetch_array($query3))
        {				?>	
		<h5>Welcome  <?php echo $row3['fname']; }?>, Love to see you back.</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                    <?php 
      if(isset($_POST['submit']))
                  {
                   $number = $_POST['number'];
                   $address = $_POST['address'];
                   $gender = $_POST['gender'];
                   $hobbies = $_POST['hobbies'];
                   $skills = $_POST['skills']; 
                   $newqry = "INSERT INTO add_more(email,number, address, gender, hobbies, skills)
                   VALUES('".$_SESSION['user']."',".$number.", '".$address."', '".$gender."', '".$hobbies."', '".$skills."')";
                   $newresult = mysqli_query($conn, $newqry); 
                   if($newresult)
{
  echo "<div class=panel-heading style=background:#09f01c67;><center>Your Data Successfully Inserted!!!</center></div>";
}
else {
    echo "Something Went Wrong";
}}
?>
                        <div class="panel-heading">
                            Add More about you 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Add about you</h3>
                                    <form role="form" method="POST" action="#">
                                
                                        <div class="form-group">
                                            <label>Phone No.</label>
                                            <input class="form-control" placeholder="Enter Phone No." type="number" name="number"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" name="address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios1" value="Male" checked />Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios2" value="Female"/>Female
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios3" value="Not Defined"/>Prefer not to say
                                                </label>
                                            </div>
                                        </div>										
                                        <div class="form-group">
                                            <label>Hobbies</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="hobbies"/>Playing
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"  name="hobbies"/>Reading
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="hobbies"/>Dancing
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="hobbies"/>Traveling
                                                </label>
                                            </div>											
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Skills</label>
                                            <select class="form-control" name="skills">
                                                <option>Programming</option>
                                                <option>Database</option>
                                                <option>Graphics Design</option>
                                                <option>Security</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        <button type="reset" class="btn btn-warning">Cancel</button>

                                    </form>                                
    </div>
                                
                                <div class="col-md-6">
                                    <h3>Your Detials</h3>
                                    <form role="form">
                                        <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Name</label>
        <?php
        $newqry = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
        $query=mysqli_query($conn, $newqry);
        while($row=mysqli_fetch_array($query))
        {
        ?>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $row[1]; ?>" disabled />
                                            </div>
											<div class="form-group">
                                                <label for="disabledSelect">Email</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $row[2]; }?>"disabled />
                                            </div>
                                            </fieldset>
                                    </form>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>From LearNovice</h3>
                         <p align="justify">
						 Your information will be kept secure from others, and will be not use for any marketing 
						 purposes. We use this information for better development of your account in LearNovice and for better Website
						 development.
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
