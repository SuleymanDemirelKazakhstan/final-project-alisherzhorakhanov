<?php 
		print_r($_GET);
	
 		$id=$_GET['book_id'];

		$mysql = mysqli_connect('localhost','root','','findbook');

		if(!$mysql){
			die("Connection failed".mysqli_connect_error());
		}

		$sql="DELETE FROM `books` WHERE `book_id`='$id'";
		$result=mysqli_query($mysql,$sql);

 	mysqli_close($mysql);

 	header("Location:index.php");

 ?>