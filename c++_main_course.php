<?php include('config.php');
session_start();
if(!isset($_SESSION['user']))
{
	header("location:index.php");
} 
?>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Learnovice C++ Course</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css" rel="stylesheet"/>
	    <link href="css/modfication.css" rel="stylesheet"/>
  </head>
  <body class="antialiased">
    <div class="wrapper">
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a style="font-size:20px;">
             <img src="img/ourlogo.png" width=30px; style="margin-left=10px;"> Learnovice
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-none d-md-flex me-3">
              <div class="btn-list">
                
              </div>
            </div>
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                
              </a>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/utsav.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
				<?php
        $newqry = "SELECT * FROM course_enroll WHERE email='".$_SESSION['user']."'";
        $query=mysqli_query($conn, $newqry);
        while($row=mysqli_fetch_array($query))
        {
        ?>
		<div><?php echo $row[1]; }?></div>
                  <div class="mt-1 small text-muted">Student</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </header>
      <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar navbar-light">
            <div class="container-xl">
              <ul class="navbar-nav">
			  <li style="margin-left:15px;">
                <a href="logout.php" class="btn btn-danger"  style="margin-top:5px; height:35px;">
                Logout
                </a>
			  </li>
                      </div>
                    </div>
                  </div>
                </li>
                
              </ul>
            </div>
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle" style="margin-left:20px;">
                  Expert Lecture
                </div>
                <h2 class="page-title" style="margin-left:20px;">
                  Videos
                </h2>
			        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-body p-4 text-center">
					<center><video src="video/vid1.mp4" controls poster="img/blog/blog-image-1.jpg" style="margin: auto;width:280px; border-radius:5px; box-shadow: 2px 2px 10px 2px rgba(0,1,0,0.2);"></video>
                    </center><div class="mt-3"><br>
                      <span class="badge bg-purple-lt" style="font-size:14px; margin-bottom:10px;">LESSON 1</span>
 <h4 class="m-0 mb-1"><a href="#">The Basics</a></h4>
                    <div class="text-muted" style="text-align: left;">This lesson woll cover C++ Basics: Program structure, namespaces, user I/O, file I/O and header
					files.</div>					
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>
 <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-body p-4 text-center">
					<center><video src="video/vid1.mp4" controls poster="img/blogimg3.jpg" style="margin: auto;width:290px;border-radius:5px; box-shadow: 2px 2px 10px 2px rgba(0,1,0,0.2);"></video>
                    </center><div class="mt-3"><br>
                      <span class="badge bg-purple-lt " style="font-size:14px; margin-bottom:10px;">LESSON 2</span>
 <h4 class="m-0 mb-1"><a href="#"></a>Compilation and Execution</h4>
                    <div class="text-muted" style="text-align: left;">Compilation and Execution in a Linux/Unix environment is discussed in this lesson and at the end 
					tips and tricks are given.</div>					
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div> 
 <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-body p-4 text-center">
					<center><video src="video/vid1.mp4" controls poster="img/blog/blog-image-2.jpg" style="margin: auto; width:280px; border-radius:5px; box-shadow: 2px 2px 10px 2px rgba(0,1,0,0.2);"></video>
                    </center><div class="mt-3"><br>
                      <span class="badge bg-purple-lt" style="font-size:14px; margin-bottom:10px;">
					  LESSON 3</span>
 <h4 class="m-0 mb-1"><a href="#">Arithmetic Operations</a></h4>
                    <div class="text-muted" style="text-align: left;">In this lesson, arithmetic operations (includign prefix and postfix) are taught and at the some 
					exericse are also given.</div>					
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>			  
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle" style="margin-left:20px;">
                  E-Books
                </div>
                <h2 class="page-title" style="margin-left:20px;">
                  Programming in C++
                </h2>
</div></div></div></div></div>				
          </div>
<div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body p-4">
                     <h3 class="m-0 mb-1"></h3>
<b style="font-size:16px;">Modern C++ for Absolute Beginners</b>					 
                    <div class="text-muted">
					 A Friendly Introduction to C++ Programming Language<br><br>
							  <p style="font-size:17px;"><b>Author</b>: Slobodan Dmitrović<br>
							   <b>Year</b>: 2020<br>
							   <b>Language</b>: English<br>
							   <b>Pages</b>: 301<br>
							   <b>File</b>: PDF, 3.01MB<br>
							   <a href="pdfs/c++_ebook.pdf" download style="text-decoration:none;"><button class="btn btn-success" style="margin-top:10px;">Download</button></a>
</p>
					</div>
                    <div class="mt-3">
                    </div>
                  </div>
                  <div class="d-flex">
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body p-4">
                    <h3 class="m-0 mb-1"></h3>
					<b style="font-size:16px;">Learn Advanced C++ Programming</b>
                            <div class="text-muted">
                              A Friendly Approach to C++ Programming Language<br><br>
							  <p style="font-size:17px;"><b>Author</b>: Team Learnovice<br>
							   <b>Year</b>: 2021<br>
							   <b>Language</b>: English<br>
							   <b>Pages</b>: 521<br>
							   <b>File</b>: PDF, 5.01MB<br>
							   <a href="pdfs/web_pro.pdf" download style="text-decoration:none;"><button class="btn btn-success" style="margin-top:10px;">Download</button></a>
</p>
                    <div class="mt-3">
                    </div>
                  </div>
                  <div class="d-flex">                    
                  </div>
                </div>				
              </div></div></div></div></div>
			  
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle" style="margin-left:20px;">
                Certificate Request
                </div>
                <h2 class="page-title" style="margin-left:20px;">
                Get Your Certificate
                </h2>
				<br>	
				<?php
        $newqry10 = "SELECT * FROM registration WHERE email='".$_SESSION['user']."'";
        $query10=mysqli_query($conn, $newqry10);
        while($row10=mysqli_fetch_array($query10))
        {
        ?>
				 <div class="input-group">
		<input  style="height:40px;" type="email" readonly  class="form-control"  placeholder="<?php echo $row10['email']; ?>"  autocomplete="off">
                 <input style="background: #000; color: #fff;" data-bs-toggle="modal" data-bs-target="#modal-full-width"type="submit" class="input-group-text" value="Get">
                 </input>   
</div></div></div></div><br><br>
<div class="page-pretitle" style="margin-left:20px;">
                Quick Test
                </div>
                <h2 class="page-title" style="margin-left:20px;">
                Test Your Skills
                </h2>
				<br>	
</div>
<div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <p style="font-size:16.5px; font-family:Calibri;">The C++ online test assesses candidates knowledge of programming in the C++ language and their ability to leverage commonly used parts of the C++ 
						Standard Library. It's an ideal test for pre-employment screening. A good C++ developer needs to be able not only to solve problems
						using C++ but also recognize when to leverage the functionality provided by Standard Library to write robust and maintainable code.</p>
						<a href="www.javatpoint.com" style="text-decoration:none;"><button class="btn btn-success">Start Test</button></a>
                      </div>
                      <!-- Card footer -->
                      <div class="card-footer">
                        <div class="row align-items-center">
                          <div class="col-auto ms-auto">
                            <div class="avatar-list avatar-list-stacked">
                              <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/4.png)"></span>
                              <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/1.png)"></span>
                              <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/2.png)"></span>
                              <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/5.png)"></span>
                              <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/8.png)"></span>
                              <span class="avatar avatar-sm avatar-rounded">+3</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  
</div>
				 
<div class="modal modal-blur fade" id="modal-full-width" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">My Certificate</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body"><center>
                          <div class="col-md-2 col-lg-10">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body p-4 py-5 text-center" id="my-section" style="background:#fff5c8e9; border: 4px double #000;">
                        <span class="avatar avatar-xl mb-4 avatar-rounded">
						<img src="img/ourlogo.png"></span>
                        <h3 class="mb-0" style="font-size:24px; font-family:Century Gothic;">Certificate of Completion</h3>
		<p class="text-muted" style="font-size:22px; font-family:Century Gothic;">This is to certfy that <strong style="font-family:Lucida Handwriting;"><?php echo $row10['fname'];}?></strong>
						successfully completed <strong>Programming in C++(2022)</strong> on Course <?php $nextWeek = time() + (7*24*60*60); 
						echo date('d-m-Y');?></p>
                        
                        <div>
                          <div class="avatar-list avatar-list-stacked">
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/star.png)"></span>
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/star.png)"></span>
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/star.png)"></span>
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/star.png)"></span>
                            <span class="avatar avatar-sm avatar-rounded" style="background-image: url(img/star.png)"></span>
                          </div>
                        </div>
						<p><hr>
                          <span>Certificate no: <?php $in_num = rand(1111111111,929594993998); 
						  echo $in_num;?></span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div></center>
		  </div>
          <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
            <input type="button" class="btn btn-success" id="btnExport" value="Download">
            
		  </div>
        </div>
      </div>
    </div>				 
							</div>
</div></div></div></div>
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Search results
                </h2>
                <div class="text-muted mt-1">About 10 result (0.19 seconds)</div>
              </div>
            </div>
          </div>
        </div>

        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-md-12">
                <div class="card">
                  <ul class="nav nav-tabs" data-bs-toggle="tabs">
                    <li class="nav-item">
                      <a href="#tabs-home-7" class="nav-link active" data-bs-toggle="tab">Lesson 1</a>
                    </li>
                    <li class="nav-item">
                      <a href="#tabs-profile-7" class="nav-link" data-bs-toggle="tab">Lesson 2</a>
                    </li>
<li class="nav-item">
                      <a href="#tabs-lesson3-7" class="nav-link" data-bs-toggle="tab">Lesson 3</a>
                    </li>					
                    
                  </ul>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active show" id="tabs-home-7">
                        <div>
						<h2>C++ Programming Basic</h2>
						<p style="color:grey;">Difficulty Level : Easy Last Updated : 14 Dec, 2021</p>
						<br>
						<p style="font-size:16px;">
						C++ is a general-purpose programming language and widely used nowadays for competitive programming. It has imperative, object-oriented and generic programming features. C++ runs on lots of platform like Windows, Linux, Unix, Mac, etc. 
						<br><br>
						<strong>However to become proficient in any programming language, one Firstly needs to understand the basics of that language. 
</strong><br><br>
Therefore, below are the basics of C++ in the format in which it will help you the most to get the headstart: 
						</p><br>
<ul>
    <ol>
      <li style="color:#000; font-size:16px; text-align:justify;"><b style="color:#228b22;">Basic Syntax and First Program in C++:</b>
	  Learning C++ programming can be simplified into writing your program in a text editor and saving it with correct extension(.CPP, .C, .CP) and compiling your program using a compiler or online IDE. The “Hello World” program is the first step towards learning any programming language and also one of the simplest programs you will learn.</li>
	  <br>
	  <li style="color:#000; font-size:16px; text-align:justify;"><b style="color:#228b22;">Basic I/O in C++:</b>
	  C++ comes with libraries which provides us with many ways for performing input and output. In C++ input and output is performed in the form of a sequence of bytes or more commonly known as streams. The two keywords cin and cout are used very often for taking inputs and printing outputs respectively. These two are the most basic methods of taking input and output in C++.
	  </li><br>
     <li style="color:#000; font-size:16px;text-align:justify;"><b style="color:#228b22;">Comments in C++:</b>
	 A well-documented program is a good practice as a programmer. It makes a program more readable and error finding become easier. One important part of good documentation is Comments. In computer programming, a comment is a programmer-readable explanation or annotation in the source code of a computer program. These are statements that are not executed by the compiler and interpreter.
	 </li>
    </ol>
</ul>
						</div>
                      </div>
                      <div class="tab-pane" id="tabs-profile-7">
                        <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                      </div>
<div class="tab-pane" id="tabs-lesson3-7">
                        <div>Lesson3</div>
                      </div>					 
                     
                    </div>
                  </div>
                </div>
              </div>        
</div>			  
			      <script src="./dist/js/tabler.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
	$("body").on("click", "#btnExport", function () {
            html2canvas($('#tblUsers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("certificate.pdf");
                }
            });
        });
    </script>	
</body>			
</html>
		  
