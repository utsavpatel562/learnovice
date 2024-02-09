<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: webchatapplogin.php");
  }
?>
<?php include_once "webchat_header.php"; ?>
<body style="background: linear-gradient(264deg, #da7f10, #802066);">
  <div class="wrapper" style="margin-top:10px; max-width:80%;">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM web_stu WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          
          <img src="img/user.png"><div class="details">
            <span><?php echo $row['email'];?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
     <div class="users-list">

      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
