<?php 

	print_r($_POST);
	if(isset($_POST['submit'])){
		$file=$_FILES['file'];


		$file_name = $file['name'];
		$file_type=$file['type'];
		$file_tmp_name=$file['tmp_name'];
		$file_error=$file['error'];
		$file_size=$file['size'];
		$check = 1;

		if(getimagesize($file_tmp_name)==false){
			echo "Please upload only image";
			$check=0;
		}

		$file_ext = explode('.',$file_name); /*точкадан кейн боледи jpg алу ушин*/
		$fileActualExt = strtolower(end($file_ext));/*кишкентайга айналдырып барлыгын сонгы массивты алады*/


		$allowedExt = array('jpg','jpeg','png','pdf','jfif');

		if(!in_array($fileActualExt, $allowedExt)){
			echo "Sorry, only JPG, JPEG, PNG & JFIF files are allowed.";
			$check=0;
		}

		if ($file_error===1) {
			echo "There was an error on uploading your file.Please check your file!";
			$check=0;
		}


		if ($check==0) {
			echo "Sorry,your file was not uploaded";
		}
		else{
			$fileNameNew = uniqid('',true).".".$fileActualExt;
			$fileDestination = "uploads/".$fileNameNew;
			move_uploaded_file($file_tmp_name, $fileDestination);
			5
		}
	}


	$mysql = mysqli_connect('localhost','root','','findbook');

	$bookName = $_POST['book_name'];
	$author = $_POST['book_author'];
	$numPages = $_POST['num_pages'];
	$date = $_POST['date'];
	$status = $_POST['status'];
	$age = $_POST['age_restric'];
	$format = $_POST['format'];
	$weight = $_POST['weight'];
	$cover = $_POST['cover'];
	$conName = $_POST['contact_name'];
	$conPhone = $_POST['contact_phone'];
	$text = $_POST['present_text'];
	$overview = $_POST['overview_text'];
	$category=$_POST['category'];

	if(!$mysql){
		die("Connection failed".mysqli_connect_error());
	}
	
	$sql = "INSERT INTO `books`(`book_id`, `book_name`, `book_author`, `num_pages`, `book_release`, `book_status`, `age_restric`, `book_format`, `book_weight`, `book_cover`, `contact_name`, `contact_phone`, `present_text`, `overview_text`, `book_category`, `book_image`) VALUES (null,'$bookName','$author','$numPages','$date','$status','$age','$format','$weight','$cover','$conName','$conPhone','$text','$overview','$category','$fileNameNew')";

	if (mysqli_query($mysql,$sql)) {
		echo "New record";
	}
	else{
		echo mysqli_error($mysql);
	}

 	mysqli_close($mysql);
 
 	header("Location:index.php");
 ?>