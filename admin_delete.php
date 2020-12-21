<?php

	print_r($_GET);
	$id=$_GET['user_id'];

	$mysql = mysqli_connect('localhost','root','','findbook');

	if(!$mysql){
			die("Connection failed".mysqli_connect_error());
		}

		$sql="DELETE FROM `users` WHERE `id`='$id'";
		$result=mysqli_query($mysql,$sql);
	
 	mysqli_close($mysql);

 	header("Location:admin.php");
?>