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
	<script>
    function myfuction(){
	alert("You Successfully Enrolled...");
    } 
</script>
  </head>
  <body class="antialiased" <?php if(isset($_REQUEST['success'])){ echo "onload='myfuction()'"; }?>>
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
          </div>
        </div>
      </div>
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="alert alert-success mb-3">
			<h2 class="page-title">
                  C++ For Programmers
				 <h3 class="page-title" style="font-size:18px; font-weight:400;">
                  About this Course
                 </h3><br>
            </h2>
            <p style="font-size:15px; text-align:justify;">C++ for Programmer is desgined for students who are familiar with a programming language and wish a programming
			language and wish to learn C++. This course foucses on 'how' as opposed to 'what'. For example, in the lesson on functions, we do not teach
			what a function is, but rather how to create a function in C++. The lessons are taught by several different instructor
			who have used C++ in their professional careers, so students get to experince different prespectives and also all over development in programming skills.
			The course also include comments, tips and tricks from Learnovice Developers - the Course Creater.
			</p>
			<a href="c++_main_course.php" style="text-decoration:none;"><button class="btn btn-success" style="width:150px; height:38px;" id="start">Start Course</button>
			</a>
          
	</div></div></div>
		
<div class="container-xl">
            <div class="row row-cards">
              <div class="col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body p-4">
                  <!-- Download SVG icon from http://tabler-icons.io/i/caret-right -->
	<h3 style="color:#228b22;"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 15l-6 -6l-6 6h12" transform="rotate(90 12 12)" /></svg>
    Watch Video</h3>				 
                    <div class="text-muted" style="margin-left:22px;">COURSE COST</div>
                    <div class="text-muted" style="margin-left:21px; font-weight:600;">Free</div>
					<div style="width:90%; margin-left:20px; margin-top:12px; height:1px; background: grey;"></div>
                    <div class="text-muted" style="margin-left:21px; margin-top:5px;">TIMELINE</div>
	                <div class="text-muted" style="margin-left:21px; font-weight:600;">Approx. 3 Weeks</div>
					<div style="width:90%; margin-left:20px; margin-top:12px; height:1px; background: grey;"></div>                    
					<div class="text-muted" style="margin-left:22px; margin-top:5px;">SKILL LEVEL</div>
                    <div class="text-muted" style="margin-left:21px; font-weight:600;">Intermediate</div>					
                    
                  </div>
                  <div class="d-flex">
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body p-4">
<h3 style="color:#228b22;">INCLUDED IN PRODUCT</h3>
                    <div class="text-muted" style="font-size:18px; margin-bottom:11px;">
<!-- Download SVG icon from http://tabler-icons.io/i/file-code -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="50" height="50" viewBox="0 0 22 22" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 13l-1 2l1 2" /><path d="M14 13l1 2l-1 2" /></svg>
					Rich Learning Content</div>
                    <div class="text-muted" style="font-size:18px; margin-bottom:11px;">
<!-- Download SVG icon from http://tabler-icons.io/i/clipboard-check -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="50" height="50" viewBox="0 0 22 22" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><rect x="9" y="3" width="6" height="4" rx="2" /><path d="M9 14l2 2l4 -4" /></svg>
					Interactive Quizzes</div>
                    <div class="text-muted" style="font-size:18px; margin-bottom:11px;">
<!-- Download SVG icon from http://tabler-icons.io/i/users -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="50" height="50" viewBox="0 0 22 22" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
					Taught by Industry Pros</div>
                    <div class="text-muted" style="font-size:18px; margin-bottom:0px;">
<!-- Download SVG icon from http://tabler-icons.io/i/clock -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="50" height="50" viewBox="0 0 22 22" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><polyline points="12 7 12 12 15 15" /></svg>
					Self-Placed Learning</div><br>
                    
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>
			  
<div class="page-header d-print-none">
            <div class="row align-items-center" >
              <div class="col" >
                <h2 class="page-title"style="font-size:23px; 
				justify-content:center;margin-left:10px; margin-bottom:14px; margin-top:10px;">
                What You Will Learn
                </h2>
              </div>
            </div>
          </div>
 <div class="col-md-6 col-lg-4" style="">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 1</h3>
                    <div>The Basics</div>
                    <div class="mt-3">
                    <ul>
                    <li>					
					  You will learn Program structure, header files, IO
					  Compilation and Executio.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 2</h3>
                    <div class="text-muted">Arithmetic Operations</div>
                    <div class="mt-3">
                    <ul>
                    <li>					
					  You will learn the most commmonly used arithmetic operations in C++.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>
<div class="col-md-6 col-lg-4">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 3</h3>
                    <div class="text-muted">Control Flow</div>
                    <div class="mt-3">
                    <ul>
                    <li>					
					  You will learn if, if-else, while, do-while, and switch statements.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>
<div class="col-md-6 col-lg-4">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 4</h3>
                    <div class="text-muted">Pointers</div>
                    <div class="mt-3">
                    <ul>
                    <li>We discuss them here becuase we'll use them in Array lesson.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>
<div class="col-md-6 col-lg-4">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 5</h3>
                    <div class="text-muted">Array</div>
                    <div class="mt-3">
                    <ul>
                    <li>					
					We will do preliminary exploration of two dimensional and multi-dimensional arrays.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>  
<div class="col-md-6 col-lg-4">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 6</h3>
                    <div class="text-muted">Functions</div>
                    <div class="mt-3">
                    <ul>
                    <li>					
You will learn about different types of functions and its examples.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>	
<div class="col-md-6 col-lg-4">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 7</h3>
                    <div class="text-muted">Classes</div>
                    <div class="mt-3">
                    <ul>
                    <li>					
					You will learn here creating and instantiating classes in lesson.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>	
<div class="col-md-6 col-lg-4">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 8</h3>
                    <div class="text-muted">Overloading</div>
                    <div class="mt-3">
                    <ul>
                    <li>					
We introduce overloading functions in this lesson as a segue into templates.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>			
<div class="col-md-6 col-lg-4">
                <div class="card" style="user-select:none;">
                  <div class="card-body p-4">
                   <h3 class="m-0 mb-1">LESSON 9</h3>
                    <div class="text-muted">Template</div>
                    <div class="mt-3">
                    <ul>
                    <li>					
					Here we inctroduce generic programming through templates.
					</li></ul>
                    </div>
                  </div>
                  <div class="d-flex">
                   
                  </div>
                </div>
              </div>			  
   	  
		
<div class="container-xl"><br>
            <div class="alert alert-success mb-3">
<h3 class="page-title" style="font-size:18px; font-weight:400;">
                  WHY TAKE THIS COURSE
                 </h3><br>
<p style="font-size:15px; text-align:justify;">
Anyone wishing to quickly learn how to program in C++ will find this course to be quite satisfactory. You will quickly
learn to program in C++ by learning the essentials of the language. You will also does not offer in depth discussions of C++, nor
does it offer a lot of alternative/advanced methods. If foucses on preparing the student to program in C++ with the minimum expenditure of time.
<br><br>
this course does not offer in depth discuessions of C++, nor does it offer a lot of alternative/advanced methods. It foucses on 
preparing the student to program in C++ with the minimum expenditure of time.
</p>
<h3 class="page-title" style="font-size:18px; font-weight:400;">
                  WHAT DO I GET?
                 </h3><br>	
 <div class="text-muted" style="font-size:16px; margin-bottom:11px;">
<!-- Download SVG icon from http://tabler-icons.io/i/file-code -->
	<!-- Download SVG icon from http://tabler-icons.io/i/target -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="12" r="5" /><circle cx="12" cy="12" r="9" /></svg>				Rich Learning Content</div>
                    <div class="text-muted" style="font-size:16px; margin-bottom:11px;">
<!-- Download SVG icon from http://tabler-icons.io/i/clipboard-check -->
	<!-- Download SVG icon from http://tabler-icons.io/i/target -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="12" r="5" /><circle cx="12" cy="12" r="9" /></svg>				Interactive Quizzes</div>
                    <div class="text-muted" style="font-size:16px; margin-bottom:11px;">
<!-- Download SVG icon from http://tabler-icons.io/i/users -->
	<!-- Download SVG icon from http://tabler-icons.io/i/target -->
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="1" /><circle cx="12" cy="12" r="5" /><circle cx="12" cy="12" r="9" /></svg>				Taught by Industry Pros</div><br>				 
			<button class="btn btn-success" style="width:150px; height:38px;">Learn more</button>
            </div>
			</div></div><br>
			      <script src="./dist/js/tabler.min.js"></script>	