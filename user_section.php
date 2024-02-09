<?php
include('config.php');
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome to LearNovience</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>L</span>ear<span>N</span>ovi<span>e</span>nce</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#hero">My Profile</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Achivement</a></li>
          <li><a href="#features">Download</a></li>
          <li><a href="#price">Payments</a></li>
          <li class="menu-has-children"><a href="#">Try It</a>
            <ul>
              <li><a href="#">Python</a></li>
              <li><a href="#">TypeScript</a></li>
              <li><a href="#">Scala</a></li>
              <li><a href="#">Block-Chain</a></li>
            </ul>
          </li>
          <li><a href="#">Logs</a></li>
          <li><a href="#contact">Contact</a></li>
         &nbsp;&nbsp;<a href="logout.php"><button style="height:32px; width:100px; border:none; background: #30ce09; 
         cursor: pointer; box-shadow: 2px 2px 10px 2px rgba(0,1,0,0.1); font-weight: 600; color: #fff; border-radius: 5px;">Logout</button></a>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
		<div class="container2">
        <div class="image-section"><br>
			  <img src="img/user (1).png">
        <form method="POST" action="upload.php" enctype="multipart/form-data"><br>
        <center><h4>Update Photo</h4></center>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br><center><input type="submit" value="Upload" name="submit" class="btnupload">
        </center></form>
			</div>
			<div class="content-section">
				<div class="title">
					<h1>My Profile</h1>
				</div><br>
			<div class="myprofilecontent">
        <?php
        $newqry = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
        $query=mysqli_query($conn, $newqry);
        while($row=mysqli_fetch_array($query))
        {
        ?>
        <p><b>LearNovience Id</b>: #<?php echo $row[0]; ?></p>
        <p><b>Name:</b> <?php echo $row[1]; ?></p>
        <p><b>Email:</b> <?php echo $row[2]; ?></p>
        <p><b>Password:</b> <?php echo $row[3]; }?></p>
      </div>
			</div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="contactform/contactform.js"></script>
  
  <script src="js/main.js"></script>
  <script src="js/script.js"></script>
</body>
</html>