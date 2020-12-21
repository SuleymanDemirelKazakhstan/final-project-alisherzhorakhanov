<?php

$login = trim($_POST["login"]);
$password = $_POST["password"];
$password = md5($password);

$mysql = new mysqli('localhost','root','','findbook');

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

$sql="SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'";

$result=$mysql->query($sql);

$user =$result->fetch_assoc();

if(count($user)==0){
	echo "No user";
	exit();
}

else if($login==="admin" && $password=="21232f297a57a5a743894a0e4a801fc3"){
	exit();
}
else{

print_r($user);
setcookie('user',$user['name'],time()+3600, "/");

$mysql->close();

header("Location:index.php");
}
?>