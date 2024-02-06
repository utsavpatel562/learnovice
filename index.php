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
  <!-- For Custom Coloring scrollbar -->
  <link href="css/scroll.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <script>
    function myfuctions() {
      alert("You are successfully registered, Login Now");
    }
  </script>

</head>

<body <?php if (isset($_REQUEST['success'])) {
        echo "onload='myfuctions()'";
      } ?>>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1 style="font-family:Calibri;"><a href="#body" class="scrollto"><span>L</span>ear<span>N</span>ovi<span>e</span>nce</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php #hero">Home</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="exercise.php">Exercise</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li class="menu-has-children"><a href="blog.php">Blog</a>

          </li>
          <li><a href="#contact">Contact</a></li>
          <li class="menu-has-children"><a href="#">Login</a>
            <ul>
              <li><a href="login.php">Student</a></li>
              <li><a href="teacher_login.php">Teacher</a></li>
              <li><a href="admin.php">Admin</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--Hero Section-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <img src="img/ourlogo.png" alt="Hero Imgs" width="300px">
      <h1 style="font-size:35px; font-family:Calibri;">Welcome to Programming World</h1>
      <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>
    </div>
  </section>

  <!--Features Section-->
  <br><br><br>
  <div id="features" class="">
    <div class="container">
      <h2 class="text-center wow fadeIn">Our Main Features</h2>

      <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
          <div class="row justify-content-center">

            <div class="col-md-6 col-lg-4 py-3 wow fadeInLeft">
              <div class="card card-body border-0 text-center shadow pt-5">
                <div class="svg-icon mx-auto mb-4">
                  <img src="img/payment.png" alt="">
                </div>
                <h5 class="fg-gray">Secure Payment</h5>
                <p class="fs-small">Payment is fully secured and easy to use.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow fadeInRight">
              <div class="card card-body border-0 text-center shadow pt-5">
                <div class="svg-icon mx-auto mb-4">
                  <img src="img/concept.png" alt="">
                </div>
                <h5 class="fg-gray">Powerful Concept</h5>
                <p class="fs-small">We want to make programming on Next Level.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
              <div class="card card-body border-0 text-center shadow pt-5">
                <div class="svg-icon mx-auto mb-4">
                  <img src="img/customizable.png" alt="">
                </div>
                <h5 class="fg-gray">Easily Customizable</h5>
                <p class="fs-small">Customizable and fully responsive</p><br>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
              <div class="card card-body border-0 text-center shadow pt-5">
                <div class="svg-icon mx-auto mb-4">
                  <img src="img/fastservice.png" alt="">
                </div>
                <h5 class="fg-gray">Fast Service</h5>
                <p class="fs-small">Better service and response time</p><br>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
              <div class="card card-body border-0 text-center shadow pt-5">
                <div class="svg-icon mx-auto mb-4">
                  <img src="img/datarecovery.png" alt="">
                </div>
                <h5 class="fg-gray">Data Recovery</h5>
                <p class="fs-small">Your is safe and recover</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
              <div class="card card-body border-0 text-center shadow pt-5">
                <div class="svg-icon mx-auto mb-4">
                  <img src="img/expertteam.png" alt="">
                </div>
                <h5 class="fg-gray">Expert Team</h5>
                <p class="fs-small">We have team of expert developers</p><br>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Suggestion Section for user-->
  <section id="trend" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Recommended Programming Langauges</h2>
        <p class="separator">Latest Trending Programming Langauges</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="img/screen/1.png" alt="img"></div>
        <div><img src="img/screen/2.png" alt="img"></div>
        <div><img src="img/screen/3.png" alt="img"></div>
        <div><img src="img/screen/4.png" alt="img"></div>
        <div><img src="img/screen/5.png" alt="img"></div>
        <div><img src="img/screen/6.png" alt="img"></div>
        <div><img src="img/screen/7.png" alt="img"></div>
        <div><img src="img/screen/8.png" alt="img"></div>
        <div><img src="img/screen/9.png" alt="img"></div>

      </div>
    </div>

  </section>
  <!--Testimonials Section-->
  <section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item  active">
                  <div class="top-top">

                    <h2>What user says about us?</h2>
                    <p>This website is so good to learn programming. Many plans for user are prepared in well mannered.</p>
                    <h4>Darshan Suthar<span>student</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>What user says about us?</h2>
                    <p>This platform is so amazing and their very impressive content about Computer languages I want LearNovience also should have to work on projects...</p>
                    <h4>Rahil Takkar<span>student</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>What user says about us?</h2>
                    <p>Want some new content about new languages like Typescript, Kotil, Dart, Tensorflow etc.</p>
                    <h4>Mann Patel<span>student</span></h4>

                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--
 <section id="price"class="pricing">
   <div class="container">
     <div class="pricing-main">
       <div class="row">
         <div class="switch-table">
            <div class="text-monthly">Weekly - Monthly</div>
            <label class="custom-switch">
               <span></span>
               <input type="checkbox" class="toggle-switch">
            </label>
            <div class="text-yearly">Monthly-Yearly</div>
         </div>
       </div>
       <div class="row">
         <div class="pricing-table style-1">
           <div class="pricing-table-header">
             <h3>Basic</h3>
           </div>
           <div class="pricing-table-price">
             <div class="monthly-price">
               <div class="currency">Rs.</div>
               <div class="amount">50</div>
             </div>
             <div class="yearly-price">
               <div class="currency">Rs.</div>
               <div class="amount">200</div>
             </div>
           </div>
           <div class="pricing-table-body">
             <ul class="monthly-features">
			    <li><i class="fa fa-check"></i>For (15 days)</li>
                <li><i class="fa fa-check"></i> More Security</li>
                <li><i class="fa fa-check"></i> Access on some rated items</li>
                <li><i class="fa fa-check"></i> Tutorials on 2 Languages</li>
             </ul>
             <ul class="yearly-features">
			    <li><i class="fa fa-check"></i>For (3 Month)</li>
                <li><i class="fa fa-check"></i> More Security(Password Protection)</li>
                <li><i class="fa fa-check"></i> Access on all rated items</li>
                <li><i class="fa fa-check"></i> Tutorials on 5 Languages</li>
				<li><i class="fa fa-check"></i>Ad - Free</li>
                <li><i class="fa fa-check"></i> E-Certificate</li>
             </ul>
           </div>
           <div class="pricing-table-footer">
             <a href="#">buy now</a>
           </div>
         </div>
         <div class="pricing-table style-2">
           <div class="pricing-table-header">
             <h3>standard</h3>
           </div>
           <div class="pricing-table-price">
             <div class="monthly-price">
               <div class="currency">Rs.</div>
               <div class="amount">100</div>
             </div>
             <div class="yearly-price">
               <div class="currency">Rs.</div>
               <div class="amount">250</div>
             </div>
           </div>
           <div class="pricing-table-body">
             <ul class="monthly-features">
                <li><i class="fa fa-check"></i>For (1 Month)</li>
                <li><i class="fa fa-check"></i>More Security</li>
                <li><i class="fa fa-check"></i>Access on some rated items</li>
                <li><i class="fa fa-check"></i>Tutorials on 3 Languages</li>
             </ul>
             <ul class="yearly-features">
                <li><i class="fa fa-check"></i>For (6 Month)</li>
                <li><i class="fa fa-check"></i>More Security (Password Protection)</li>
                <li><i class="fa fa-check"></i>Access on all rated items</li>
                <li><i class="fa fa-check"></i>Tutorials for all Languages</li>
                <li><i class="fa fa-check"></i>Ad - Free</li>
                <li><i class="fa fa-check"></i>E-Certificate</li>
             </ul>
           </div>
           <div class="pricing-table-footer">
             <a href="#">buy now</a>
           </div>
         </div>
         <div class="pricing-table style-3">
           <div class="pricing-table-header">
             <h3>premium</h3>
           </div>
           <div class="pricing-table-price">
             <div class="monthly-price">
               <div class="currency">Rs.</div>
               <div class="amount">150</div>
             </div>
             <div class="yearly-price">
               <div class="currency">Rs.</div>
               <div class="amount">400</div>
             </div>
           </div>
           <div class="pricing-table-body">
             <ul class="monthly-features">
                <li><i class="fa fa-check"></i>For (2 Month)</li>
                <li><i class="fa fa-check"></i>More Security</li>
                <li><i class="fa fa-check"></i>Access on some rated items</li>
                <li><i class="fa fa-check"></i>Tutorials on 4 Languages</li>
             </ul>
             <ul class="yearly-features">
                <li><i class="fa fa-check"></i>For (1 Year)</li>
                <li><i class="fa fa-check"></i>More Security (Password Protection)</li>
                <li><i class="fa fa-check"></i>Access on all rated items</li>
                <li><i class="fa fa-check"></i>Tutorials for all Languages</li>
                <li><i class="fa fa-check"></i>Ad - Free</li>
                <li><i class="fa fa-check"></i>E-Certificate</li>
             </ul>
           </div>
           <div class="pricing-table-footer">
             <a href="#">buy now</a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section> -->

  <!--Blog Section-->
  <section id="blog" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>Latest posts</h2>
        <p class="separator">Learn Something New</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="lang_c++.php"><img src="img/blog/blog-image-1.jpg" alt="img"></a>
            <div class="content-blog">
              <h4><a href="lang_c++.php">Learn C++, start learning and get new start to your programming skills</a></h4>
              <span>March 2022<span>
                  <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="blog.php"><img src="img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="blog.php">Let's learn about Swift: The IOS Programming</a></h4>
              <span>March 2022</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="blog.php"><img src="img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="blog.php">Learn Node.js and React.js and Javascript for Web Development</a></h4>
              <span>March 2022</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--Newsletter Section-->
  <section id="newsletter" class="newsletter text-center wow fadeInUp">
    <div class="overlay padd-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">
              <input type="email" class="form-control " placeholder="Email Adress" name="email" autocomplete="off">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>
            </form>
          </div>
        </div>

        <ul class="list-unstyled">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>


      </div>
    </div>
  </section>


  <!--Footer-->
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
              <li><a href="#features">Features item</a></li>
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
              <li><a href="aboutus.php">Keval Pate</a></li>
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
        Developed by<a href="https://about-me.com/"> Team Learnovice</a>
      </div>
    </div>
    </div>
  </footer>
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