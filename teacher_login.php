<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login_signin/style.css"/>
    <title>Sign in & Sign up Form</title>
	
	<script>
    function myfuction(){
	alert("Invalid User Id / Password");
    } 
</script>
<script>
    function myfuctions(){
	alert("Email ID is already exist, Try another one!!!");
    } 
</script>
  </head>  
  <body <?php if(isset($_REQUEST['error'])){ echo "onload='myfuction()'"; }?>
  <?php if(isset($_REQUEST['error2'])){ echo "onload='myfuctions()'"; }?>>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
<!-- Login Form Action-->
 <form method="POST" action="teacher_login_process.php" class="sign-in-form">
            <h2 class="title">Teacher Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Enter Email" name="email" required autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <input type="submit" class="btn solid" value="Login">
           
          </form>
<!-- Register Form Action-->
 <form method="POST" action="teacher_regsiter.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Full Name" name="name" required autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required autocomplete="off">
            </div>
			<div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="number" placeholder="Contact no" name="number" required autocomplete="off">
            </div>
			<div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Qulification" name="qulification" required autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required autocomplete="off">
            </div>
			<input type="submit" class="btn" value="Register Now">
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Create account now?</h3>
            <p>
              Let your programming skills to be shine, in this virtual world of 
			  programming...</p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="login_signin/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Login Now?</h3>
            <p>
              Let your programming skills to be shine, in this virtual world of 
			  programming...
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="login_signin/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login_signin/app.js"></script>
  </body>
</html>
