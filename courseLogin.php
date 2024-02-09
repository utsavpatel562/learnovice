<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Learnovice Course Login</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css" rel="stylesheet"/>
	<script>
    function myfuction(){
	alert("Invalid User Id / Password");
    } 
</script>
<script>
    function myfuction2(){
	alert("You are already enrolled, Access your course from your account...");
    } 
</script>
  </head>
 <body class="antialiased d-flex flex-column" <?php if(isset($_REQUEST['error'])){ echo "onload='myfuction()'"; }?>
 <?php if(isset($_REQUEST['error2'])){ echo "onload='myfuction2()'"; }?>>
    <div class="page page-center">
      <div class="container-tight py-4">
      
        <div class="card card-md">
          <div class="card-body text-center py-4 p-sm-5">
            <img src="img/ourlogo.png" height="128" class="mb-n2" height="120"  alt="">
            <h1 class="mt-5">Learnovice Course</h1>
            <p class="text-muted">Learnovice comes with tons of well-designed courses and features. Start your adventure with Learnovice and make your programming skills advanced.</p>
          </div>
          <div class="hr-text hr-text-center hr-text-spaceless" style="font-size:17px;">Login</div>
          <div class="card-body">
            <div class="mb-3">
			<form method="POST" action="courseLogin_process.php">
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
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
  </body>
</html>