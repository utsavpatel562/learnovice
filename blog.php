<html>
<head>
<title>LearNovice Blog</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog/bootstrap.min.css">
    <link rel=" stylesheet" href="css/blog/slick.css">
    <link rel="stylesheet" href="css/blog/blog.css">
	  <link href="css/scroll.css" rel="stylesheet">
</head>
<body>
<?php include('header.php')?>
<!-- section starts  -->
        <section id="hero">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-8">

                        <div class="post featured-post-lg">
                            <div class="details clearfix">
                                <a href="#" class="category-badge">Programming</a>
                                <h2 class="post-title"><br>
                                    <a href="lang_c++.php">Start with C++ Programming</a>
                                </h2>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#">LearNovice</a>
                                    </li>
                                    <li class="list-inline-item">23 Oct 2021</li>
                                </ul>
                            </div>
                            <a href="lang_c++.php">
                                <div class="thumb rounded">
                                    <div class="inner data-bg-image" data-bg-image="">
									<img src="img/blogimg1.jpg" style="max-width:1000px; height: 550px;">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="post-tabs rounded bordered">
                            <ul class="nav nav-tabs nav-pills nav-fill" id="postTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="popular" aria-selected="true" class="nav-link active"
                                        data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab"
                                        type="button">
                                        Popular
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="recent" aria-selected="false" class="nav-link"
                                        data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab"
                                        type="button">
                                        Recent
                                    </button>
                                </li>

                            </ul>

                            <!-- content  -->
                            <div class="tab-content" id="postsTabContent">
                                <!-- loader -->
                                <div class="lds-dual-ring"></div>
                                <!-- pop post  -->

                                <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab"
                                    role="tabpanel">
                                    <!-- post  -->
                                    
                                    <!-- post2  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/sql.png" alt="" style="max-width: 45px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">SQL Oracel Database</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">27 Oct 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post4  -->
                                </div>

                                <!-- recent  -->
                                <div class="tab-pane fade" id="recent" aria-labelledby="recent-tab" role="tabpanel">
                                    <!-- post  -->
                                    
                                    <!-- post2  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">SQL Injection and Prevention</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">01 Nov 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <!-- main content  -->

        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">

                    <!-- left part 1st section  -->
                    <div class="col-lg-8">
                        <div class="section-header">
                            <h3 class="section-title">Most Viewed</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <!-- post  -->
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="#" class="category-badge position-absolute">Database</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/blogimg2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" style="color:#000;">
                                                    LearNovice
                                                </a>
                                            </li>
                                            <li class="list-inline-item">04 Nov 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="#">Start with Database Security</a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                        Database security is range of tools, controls, and designed to establish database CIA.
										</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/crypto.png" alt="" style="width:60px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">
                                                Cryptography Encryption and Decryption
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">05 Nov 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/networksec.png" alt="" style="width:60px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">
                                                What is network security why it is need?
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">05 Nov 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/xamp.png" alt="" style="width:60px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">
												Send Mail using PHP STMP in XAMPP
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">06 Nov 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="section-title">Our Trending</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="#" class="category-badge position-absolute">Project</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="#"  style="color:#000;">
                                                <div class="inner">
                                                    <img src="img/blog/blog-image-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" style="color:#000">
                                                LearNovice
                                                </a>
                                            </li>
                                            <li class="list-inline-item">10 Nov 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="#">Project Documentation and its Importance</a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                        Project Documentation is very important because will describe your flow of your project and its work
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="#" class="category-badge position-absolute">Inspiration</a>
                                            <span class="post-format">
                                                <i class="icon-earphones"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/blog/blog-image-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" style="color:#000;">
                                                    <img src="images/other/author-sm.jpg" class="author" alt="">
                                                    LearNovice
                                                </a>
                                            </li>
                                            <li class="list-inline-item">14 Nov 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="#">About Bugs and Errors</a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                        Bugs and Errors makes you more experienced that so errors 
										are very important part of programming.
                                        </p>
                                    </div>     
                                </div>
                            </div>
                        </div><br>
                        <div class="spacer" data-height="50"></div>
                        <div class="row post-carousel-twoCol post-carousel">
                          
                        </div>
                        <!-- left part over here  -->
                    </div>
                    <!-- right part starts from here  -->

                    <div class="col-lg-4">
                        <div class="sidebar">
                            

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Popular Posts</h3>
                                </div>
                                <div class="widget-content">
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">12</span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/databasesec.png" alt="" style="width:50px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Database & Security Development</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">05 Nov 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">28</span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/nodejs.png" alt="" style="width:50px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Basic to Advance Node JS</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">09 Nov 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">6</span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/sass.png" alt="" style="width:50px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Desing using SASS</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">10 Nov 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">12</span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="img/c.png" alt="" style="width:50px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Compelete with 'C' Programming</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">13 Nov 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Explore Topics</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Web Development</a><span>(134)</span></li>
                                        <li><a href="#">Software Development</a><span>(89)</span></li>
                                        <li><a href="#">Network Security</a><span>(20)</span></li>
                                        <li><a href="#">Databases & its Security</a><span>(72)</span></li>
                                        <li><a href="#">Projects</a><span>100+</span></li>
                                        <li><a href="#">Net worth</a><span>4LPA+</span></li>
                                    </ul>
                                </div>
                            </div></div></div></div></div>
							<footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">
            <a class="navbar-brand" href="#">LearNovience
			            <p>For more information about us please go on links given.<br>
			   Hope you love your exprecience with us with programming.</p>
			</a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">
            <h4>About Us</h4>
            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">
            <h4>Support</h4>
            <ul class="list-unstyled">
              <li><a href="#">Utsav Patel</a></li>
              <li><a href="#">Keval Patel</a></li>
              <li><a href="#">Mann Patel</a></li>
			  <li><a href="#">Darshan Suthar</a></li>
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
</body>
    <script src="css/blog/js/jquery.min.js"></script>
    <script src="css/blog/js/popper.min.js"></script>
    <script src="css/blog/js/bootstrap.min.js"></script>
    <script src="css/blog/js/slick.min.js"></script>
    <script src="css/blog/js/jquery.sticky-sidebar.min.js"></script>
    <script src="css/blog/main.js"></script>
</html>