<?php

	$mysql = mysqli_connect('localhost','root','','findbook');

	if(!$mysql){
		die("Connection failed".mysqli_connect_error());
	}

	$sql="SELECT * FROM `books`";
	
	$result=mysqli_query($mysql,$sql);
	
	$array=array();
	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$array[] = $row;
		}
	}
	
	exit(json_encode($array));
?>