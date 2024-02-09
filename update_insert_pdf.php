					<?php 
					session_start();
		include('config.php');					
        if (isset($_POST['submit'])) {
		  $work_title = $_POST['work_title'];
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="class_pdf/".$pdf;
		  		  $add_btn = $_POST['add_btn'];

          move_uploaded_file($pdf_tem_loc,$pdf_store);
		  
		$id = $_REQUEST['id'];  
		$qry = "UPDATE pdf_file SET work_title='$work_title', pdf='$pdf', add_btn='$add_btn'";
		$result=mysqli_query($conn,$qry);
		if($result)
		{
			//echo "Success";
			header("location:teacher_home.php?success=1");			
		}
		else {
			echo "Error Occured!!!";
		}}
?>