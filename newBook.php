<?php





if(isset($_POST['update'])){
	
		
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
			
		}

		$mysql = mysqli_connect('localhost','root','','findbook');

		if(!$mysql){
	 		die("Connection failed".mysqli_connect_error());
		}
						
			$id=$_REQUEST['book_id'];
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

			
	
			$sql = "UPDATE `books` SET `book_name`='$bookName',`book_author`='$author',`num_pages`='$numPages',`book_release`='$date',`book_status`='$status',`age_restric`='$age',`book_format`='$format',`book_weight`='$weight',`book_cover`='$cover',`contact_name`='$conName',`contact_phone`='$conPhone',`present_text`='$text',`overview_text`='$overview',`book_category`='$category',`book_image`='$fileNameNew' WHERE `book_id`='$id'";

			if (mysqli_query($mysql,$sql)) {
				echo "Update record";
			}
			else{
				echo mysqli_error($mysql);
			}


			mysqli_close($mysql);

}
header("Location:index.php");

?>