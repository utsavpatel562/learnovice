					<?php 
					session_start();
					include('config.php');					
        if (isset($_POST['submit'])) {
			$id = $_REQUEST['class_id'];  
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="student_class_pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);
		  $qry = "INSERT INTO student_pdf_file(email,class_id,pdf)
        VALUES('".$_SESSION['user']."','".$_REQUEST['class_id']."', '".$pdf."')";
		$result=mysqli_query($conn,$qry);
		if($result)
		{
			//echo "Success";
			header("location:user_viewClass.php");			
		}
		else {
			echo "Error Occured!!!";
		}}
?>