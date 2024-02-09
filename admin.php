<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login_signin/style.css"/>
    <link rel="stylesheet" href="login_signin/admin.css"/>
    <title>Admin</title>
	
	<script>
    function myfuction(){
	alert("Invalid Email Id / Password");
    } 
</script>
<style>
#myscript{
	background:#000;
}
</style>
  </head>  
  <body <?php if(isset($_REQUEST['error'])){ echo "onload='myfuction()'"; }?>>
<!-- Login Form Action-->
<div class="maincontainer"><br><br><br><br>
<div class="mycontainer">
 <form method="POST" action="admin_login_process.php" class="sign-in-form">
            <h2 class="title"><br>Welcome Back</h2>
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
</div>
</div>
    <script src="login_signin/app.js"></script>
  </body>
</html>
