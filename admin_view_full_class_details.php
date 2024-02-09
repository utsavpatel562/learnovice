<?php
session_start();
include('config.php');
include('admin_header.php');
?>
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Full Class Details
                </h2>
              </div>
            </div>
          </div>
        </div>
        <?php 
                        $id = $_REQUEST['id'];
                        $sql = "SELECT * FROM create_class WHERE id = '".$_REQUEST['id']."'";
                        $run = mysqli_query($conn, $sql);
                        while($print = mysqli_fetch_array($run)) {
                        ?>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                          <?php echo $print['subject'];?> 
                        <h3 class="card-title">
                        
                        </h3>
                        <div class="card-actions">
                          <a href="#">
                            <!-- Edit Details <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                            <!--<svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>
                          --></a>
                        </div>
                      </div>
                      <div class="card-body">
                        <dl class="row">
                        <dt class="col-5">Learnovice ID</dt>
                          <dd class="col-7"><input type="text" class="form-control" value="<?php echo $print['id']; ?>" readonly style="width:50px;"></dd>
                        <dt class="col-5">Email ID</dt>
                          <dd class="col-7"><?php echo $print['email']; ?></dd>
                          <dt class="col-5">Class Code</dt>
                          <dd class="col-7"><?php echo $print['mycode']; ?></dd>
                          <dt class="col-5">Title</dt>
                          <dd class="col-7"><?php echo $print['title']; }?></dd>  
                                   
                          <dt class="col-5">Files Uploaded</dt>
                          <dd class="col-7">1</dd>
                          <dt class="col-5">Joined Students</dt>
                          <dd class="col-7">4</dd>
                          <dt class="col-5">Responses</dt>
                          <dd class="col-7"></span>
                            2</dd>                          
                        </dl>
                      </div>
                    </div>
                  </div>