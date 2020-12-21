<?php
if(isset($_POST["signButton"])){
	print_r($_POST);
	$name = trim($_POST["name"]);
	$surname = trim($_POST["surname"]);
	$login = trim($_POST["login"]);
	$password = $_POST["password"];
	$password = md5($password);

	$error_name = " ";
	$error_sname =" "; 
	$error = false;
	if(is_numeric($name) || $name == ""){
		$error_name="Please insert correct name!";
		$error=true;
	}
	if(is_numeric($surname) || $surname == ""){
		$error_sname="Please insert correct surname!";
		$error=true;
	}

	if($error==false){
		$mysql = new mysqli('localhost','root','','findbook');

		if ($mysql->connect_error) {
    		die("Connection failed: " . $mysql->connect_error);
		}

		$sql="INSERT INTO `users`(`id`, `name`, `surname`, `login`, `password`) VALUES (NULL,'$name','$surname','$login','$password')";

		$mysql->query($sql);

		$mysql->close();
}
}
header("Location: login.php");
?>
