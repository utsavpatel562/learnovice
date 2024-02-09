<head>
    <link href="css/teacher_scroll.css" rel="stylesheet">
    <script>
    function myfuction(){
	alert("Invalid User Id / Password");
    } 
</script>
<script>
    function myfuction2(){
	alert("You are already enrolled, Access it from your Course tab");
    } 
</script>
</head>
<?php 
session_start();
include('config.php');
include('teacher_header.php');
?><br>
			  <h2 style="margin-left:55px;">My Course</h2>
			<?php  $newqry3 = "SELECT * FROM course_enroll WHERE email='".$_SESSION['user']."'";
        $query3=mysqli_query($conn, $newqry3);
        while($row3=mysqli_fetch_array($query3))
		{
			if($query3)
	        {
		     ?>
<body class="antialiased d-flex flex-column" <?php if(isset($_REQUEST['error'])){ echo "onload='myfuction()'"; }?>
 <?php if(isset($_REQUEST['error'])){ echo "onload='myfuction2()'"; }?>>         
<div class="col-md-6 col-xl-4" style="margin-left:65px;">
                <div class="card card-sm">
                  <div class="card-body" style="height:120px;">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/1.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Programming in C++</h2>
                        </div>
                        <div class="text-muted">
                        <a href="c++_course_overview.php" style="text-decoration:none"><button class="btn btn-warning">View Course</button></a>
						<a href="teacher_unenroll_process.php?email=<?php echo $row3['email'];?>" style="text-decoration:none"><button class="btn btn-danger">Unenroll Course</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
				  
                </div>
			
              </div
 <?php
	       }
	     else
	    {
		?>
                    <center><img src="assets/img/empty.jpg" width="320px">
                    <h3>You not buy a Course yet!!!</h3>				
         </div>
	<?php
	}
		}
?>				  
<body class="antialiased"><hr>
 <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
 <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/1.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Programming in C++</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-team">Enroll Now</button>
                      
                        <div class="modal modal-blur fade" id="modal-team" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Programming in C++</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3 align-items-end">
              <div class="col-auto">
               
              </div>

              <div class="card card-md">
          <div class="card-body text-center py-4 p-sm-5">
            <img src="img/ourlogo.png" height="128" class="mb-n2" height="120"  alt="">
            <h1 class="mt-5">Learnovice Course</h1>
            <p class="text-muted">Learnovice comes with tons of well-designed courses and features. Start your adventure with Learnovice and make your programming skills advanced.</p>
          </div>
          <div class="hr-text hr-text-center hr-text-spaceless" style="font-size:17px;">Login</div>
          <div class="card-body">
            <div class="mb-3">
			<form method="POST" action="teachercourseLogin_process.php">
              <label class="form-label">Email ID</label>
              <div class="input-group input-group-flat">                
                <input type="email" name="email" class="form-control ps-1"  autocomplete="off" placeholder="Enter email here..." required>
              </div><br>
			  <label class="form-label">Password</label>
              <div class="input-group input-group-flat">                
                <input type="password"  name="password" class="form-control ps-1"  autocomplete="off" placeholder="Enter Password here..." required>
              </div>
            </div>
            
			<input type="submit" class="btn btn-success">
          </div>
        </div>
      </div>
    </div>
          
        </div>
      </div>
    </div>


                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
	<div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/4.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Ruby Programming</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/5.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>C Sharp</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/6.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Java Programming</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/8.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Javascript</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/9.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Python Programming</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/2.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>HTML</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/3.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Cascading Stylesheet</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/angular.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Angular js</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/c.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Programming in C</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/php.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>PHP Database</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/sql.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Structured query language</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/react.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>React js</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/swift.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>Swift: IOS Programming</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-md-6 col-xl-4">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="bg-white text-white avatar" style="width:50px;"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<img src="img/sass.png">
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          <h2>SASS</h2>
                        </div>
                        <div class="text-muted">
                        <button class="btn btn-success">Enroll Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div></div></div></div><br><br>