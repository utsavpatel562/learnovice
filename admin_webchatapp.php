<?php 
session_start();
include('config.php');
include('admin_header.php');
?>
<html>
<head>
  <link rel="stylesheet" href="dist/tablecss/style.css">
</head>
<body>
<div class="page-wrapper">
        
        <div class="page-body">
          <div class="container-xl">
		  <h2 class="page-title">
                WebChat App User's
				 <h3 class="page-title" style="font-size:14px;">
                  By Learnovice
                 </h3><br>
            </h2>
<br>
<div style="overflow-x: auto;">
<input class="btn btn-warning" style="margin-left:15px; margin-bottom:10px;" type="button" id="btnExport" value="Export to PDF" />
<div class="row g-2" style="width:98%; margin:auto; margin-bottom:12px;">
                                <div class="col">
                                  <input type="text" id="gfg" class="form-control" placeholder="Search Here…">
                                </div>
                                <div class="col-auto">
                                  <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                                  </a>
                                </div>
                              </div>
<table class="table table-dark" id="tblUsers">
<tr>
<th scope="col">Learnovice ID</th>
<th scope="col">Unique ID</th>
<th scope="col">Email ID</th>
<th scope="col">Password</th>
<th scope="col">Status</th>
<th scope="col">View Full Profile</th>
<th scope="col">Delete Data</th>

</tr>
<tbody id="geeks">
<?php 
$sql = "SELECT * from web_stu";
 $check = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($check))
 {
	 echo "<tr>";
	 echo "<td>#".$row['user_id']."</td>";
     echo "<td>#".$row['unique_id']."</td>";
	 echo "<td>".$row['email']."</td>";
	 echo "<td>".$row['password']."</td>";
     echo "<td>".$row['status']."</td>";
	 echo "<td><button class=btn3><a href=viewuserprofile.php?email=".$row['email'].">View Profile</a></td>";

	 echo  "<td><div class=dropdown>
                                <button  style=background:#f52a2a;color:#fff;height:34px;width:100px; class=btn dropdown-toggle align-text-top data-bs-boundary=viewport data-bs-toggle=dropdown>
                                  Action
                                </button>
                                <div class=dropdown-menu dropdown-menu-end>
                                <a href=delete_webChat_process.php?email=".$row['email']."><button class=dropdown-item style=color:#000;>Delete</button></a>                             
                                </div>
                              </div>
							 </td>";
 }
?>
</tr>
</tbody>
</table>
</div>
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
                    pdfMake.createPdf(docDefinition).download("webchatapp_details.pdf");
                }
            });
        });
    </script>
	<script>
            $(document).ready(function() {
                $("#gfg").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#geeks tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
</body>
</html>