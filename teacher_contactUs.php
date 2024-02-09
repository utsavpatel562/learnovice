<?php 
session_start();
include('config.php');
include('teacher_header.php');
?>
<div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-6" style="margin:auto; margin-top:10px;">
                <form action="#" method="post" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Contact Us</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="row">

<div class="mb-3">
                              <label class="form-label">Subject</label>
                              <input type="text" class="form-control" name="subject" autocomplete="off" placeholder="Write your subject" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Comment</label>
                              <input type="email" class="form-control" name="comment" autocomplete="off" placeholder="Mention your comment" required>
                            </div>
<div class="mb-3">
                              <label class="form-label">Suggestions</label>
                              <input type="text" class="form-control" autocomplete="off" placeholder="Mention your suggestions" required>
                            </div>
 <center><input style="width:200px;" class="btn btn-success" type="submit" name="submit" value="Send">
                            </div>
							</form>
</div></div></div></div></div></div></div></div><br><br>						