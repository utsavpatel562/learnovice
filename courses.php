<?php
include('header.php');
?>
<html>
    <head>
        <title>LearNovice Courses</title>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/coursescss/bootstrap.min.css">
    <link rel="stylesheet" href="css/coursescss/unicons.css">
    <link rel="stylesheet" href="css/coursescss/owl.carousel.min.css">
    <link rel="stylesheet" href="css/coursescss/owl.theme.default.min.css">
  <link href="css/scroll.css" rel="stylesheet">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/coursescss/tooplate-style.css">
	</head>
	<body style="background-color: whitesmoke">
	<!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container" style="background-color:#000; border-radius: 10px; box-shadow: 2px 
		2px 10px 2px rgba(0,1,0,0.3);">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <h1 class="animated animated-text" style="color:#dcdcdc;">
                            <span class="mr-2">Be first a</span>
                                <div class="animated-info">
                                    <span class="animated-item">Learner</span>
                                    <span class="animated-item">Developer</span>
                                </div>
                        </h1>

                        <p style="color: #dcdcdc">Building a successful product is a challenge. I am highly energetic in user experience design, interfaces and web development.</p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="#mycou" class="btn mr-lg-2 custom-btn custom-btn-bg2">Get Course</a>
                          <a href="#mycou" class="btn custom-btn custom-btn-bg custom-btn-link">Enroll Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="img/exams.png" class="img-fluid" alt="png image" style="width:90%;">
                    </div>
                </div>

            </div>
        </div>
    </section>
	
	<!--  Courses Section -->
	<section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2 id="mycou">Our Courses</h2>
						<br>
						<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
						<input required type="text" name="search" autocomplete="off" placeholder="Search Course Here..." style="height:40px;
						padding-left:25px; width:80%; border:none; border-radius:5px; box-shadow: 2px 2px 10px 2px rgba(0,1,0,0.2);">&nbsp;&nbsp;<input type="submit" value="Search" name="submit" style="
						background: #fff; color: #228b22; width:100px; height:40px; font-weight:600; margin-top:10px; border-radius:5px; border:3px solid #228b22;">
                      </form>
					  <br>
                       <?php 
					    if(isset($_POST['submit'])) {
							$search = $_POST['search'];
							if($_POST['search'] == "c++") {
								?>
								
                        <div class="item" style="width:250px; height:280px; margin:auto;">
                          <div class="project-info">
                            <img src="img/1.png" class="img-fluid" alt="project image" style="width:100px;">
							<h3>Programming C++</h3>
							<a href="courseLogin.php"><button class="buyon">Enroll Now</button></a>
                          </div>
                        </div>						
								<?php
							}
							elseif($_POST['search'] == "html") {
								?>
								 <div class="item" style="width:250px; height:280px; margin:auto;">
                          <div class="project-info">
                            <img src="img/2.png" class="img-fluid" alt="project image" style="width:100px;">
							<h3>Learn HTML</h3>
							<a href="courseLogin.php"><button class="buyon">Enroll Now</button></a>
                          </div>
                        </div>
								<?php
							}
							elseif($_POST['search'] == "ruby") {
								?>
								<div class="item" style="width:250px; height:280px; margin:auto;">
                          <div class="project-info">
                            <img src="img/4.png" class="img-fluid" alt="project image" style="width:100px;">
							<h3>Programming in Ruby</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>
								<?php
							}
							elseif($_POST['search'] == "c#") {
								?>
								
								                        <div class="item" style="width:250px; height:280px; margin:auto;">
                          <div class="project-info">
                            <img src="img/5.png" class="img-fluid" alt="project image" style="width:100px;">
							<h3>C# Programming</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>
								<?php
							}
							else {
								?>
								<center><h3><u>No result found</u></h3></center>
								<?php 
							}
							
						}
					  ?>					  
					  
					  </div><br>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="img/1.png" class="img-fluid" alt="project image">
							<h3>Programming C++</h3>
							<a href="courseLogin.php"><button class="buyon">Enroll Now</button></a>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="img/2.png" class="img-fluid" alt="project image">
							<h3>Learn HTML</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="img/3.png" class="img-fluid" alt="project image">
							<h3>Desing using CSS</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="img/4.png" class="img-fluid" alt="project image">
							<h3>Ruby Programming</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="img/5.png" class="img-fluid" alt="project image">
							<h3>C# Programming</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
        </div>
    </section>
	<!-- Courses End-->
	<!--  Top rated courses Section -->
	<section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Our Top Rated Courses</h2>
                      </div><br>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="img/6.png" class="img-fluid" alt="project image">
							<h3>Java Development</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="img/9.png" class="img-fluid" alt="project image">
							<h3>Learn Python</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="img/8.png" class="img-fluid" alt="project image">
							<h3>Javascript</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="img/c.png" class="img-fluid" alt="project image">
							<h3>Programming in C</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="img/swift.png" class="img-fluid" alt="project image">
							<h3>Start with Swift</h3>
							<button class="buyon">Enroll Now</button>
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
        </div>
    </section>
		<!--  Top rated courses Section End-->
		 <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">
            <a class="navbar-brand" href="#">LearNovience</a>
            <p>For more information about us please go on links given.
			   Hope you love your exprecience with us with programming.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">
            <h4>About Us</h4>
            <ul class="list-unstyled">
              <li><a href="aboutus.php">About us</a></li>
              <li><a href="index.php #features">Features item</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">
            <h4>Support</h4>
            <ul class="list-unstyled">
              <li><a href="aboutus.php">Utsav Patel</a></li>
              <li><a href="aboutus.php">Keval Patel</a></li>
              <li><a href="aboutus.php">Mann Patel</a></li>
			  <li><a href="aboutus.php">Darshan Suthar</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">
            <h4>Refereced Links</h4>
            <ul class="list-unstyled">
			<li><a href="#">www.LearNovience.com</a></li>
              <li><a href="#">www.W3school.com</a></li>
              <li><a href="#">www.javaTpoint.com</a></li>
              <li><a href="#">www.Tutorialpoint.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyrights">
      <div class="container">
          Developed by<a href="https://about-me.com/"> Team LearNovience</a>
        </div>
      </div>
    </div>
  </footer>
		
	<!--  Top rated courses Section -->	
	</body>
</html>
        