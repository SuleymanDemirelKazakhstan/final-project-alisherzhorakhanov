<?php
	if(isset($_POST["signButton"])){
	
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

	if(isset($_POST["logButton"])){
		//print_r($_POST);
		$login = trim($_POST["login"]);
		$password = $_POST["password"];
		$error_name = " ";
		$error_sname =" "; 
		
		$error=false;

		if($login == ""){
			$error_name="Please insert correct login!";
			$error=true;
			
		}
		if($password == ""){
			$error_sname="Please insert correct password!";
			$error=true;

		}

		if($error==false){
			$mysql = new mysqli('localhost','root','','findbook');

			if ($mysql->connect_error) {
    			die("Connection failed: " . $mysql->connect_error);
			}

			

			$password = md5($password);



			$sql="SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'";

			$result=$mysql->query($sql);


			$user =$result->fetch_assoc();
			//print_r($user);

			if(!empty($user)){
				setcookie('user',$user['name'],time()+3600, "/");
				header("Location:index.php");
			}	

			$mysql->close();

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Логин</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="style.css">


	<style type="text/css">

		@media screen and (max-width: 1230px) {
			
			
			
			.header_links a{
				position:relative;
				top:5px;
				

			}
 		 	.header_links a:not(:first-child) {
 		 		display: none;

 		 	}
  			.header_links a.icon {
    			float: right;
    			display: block;
  			}
  			.header_links a.icon:hover {
    			border-bottom: none;
  			}


		}

		@media screen and (max-width: 1230px) {
  			.header_links.responsive {
  				position: absolute;
  				right: 20px;
  				width: 130px;
  				background-color: orange;
  			}
  			

  			.header_links.responsive .icon {
   			 	position:relative;
   			 	top:0px;
   			 	right: 0px;
    		
    		}
  			

  			.header_links.responsive a {

    			float: none;
    			display: block;
    			text-align: center;
    			margin-bottom: 5px;
  			}
		}


		@media screen and (max-width: 890px){
      		
      		#logo{
        		position: absolute;
        		font-size: 25px;
        		top:21px;
      		}

      		.search_container{
        		position: absolute;
        		left:160px;
       			top:21px;
        		width: 400px;
        
      		}

      		.search_container input[type=text]{
        		width: 300px;

      		}
    
    	} 


    	@media screen and (max-width: 696px){
    		#contacts_logo{
    			display: grid;
    			justify-items: center;
    			
    		}

    		.get_in_touch{
    			line-height: 1.6;

    		}

    	} 


		@media screen and (max-width: 670px){
			#logo{
				position: absolute;
				font-size: 23px;
				top:25px;
				left:15px;
			}

			.search_container{
				position: absolute;
				left:130px;
				top:26px;	
			}


			.search_container input[type=text]{
				width: 200px;
				height: 25px;
			}

			.search_container button{
				height: 29px;
			}

			#big_word{
				font-size: 20px;
			}

			#small_word{
				font-size: 10px;
			}

			#truck_icon{
				font-size: 20px;
			}

		}

		


	@media screen and (max-width: 480px){
      .search_container{
        position: absolute;
        left:120px;
        top:26px; 
      }

      .search_container input[type=text]{
        width: 150px;
        height: 25px;
      }

      .search_container button{
        height: 29px;
      }

      

      .header_links.responsive {
          position: absolute;
          right: 0px;
          width: 130px;
          background-color: orange;
        }

        .header_links.responsive .icon {
          position:relative;
          top:0px;
          right: 0px;
        
        }

        .header_links .icon{
          position: absolute;
          right: -20px;
        }

        .header_links.responsive a {
          font-size: 15px;
        }


    }

    @media screen and (max-width: 385px){

      .search_container {
        display: none;
      }


    }

  @media screen and (max-width: 200px){
      #logo{
        position: absolute;
        top:10px;
        left:20px;
      }
      

      .header_links {
        position: absolute;
        left:10px;
        top:40px;
        
        
      }
    }	
		
		*{
			font-family: "Ubuntu","Helvetica Neue",Helvetica,Arial,sans-serif;
		}

		body{
			margin: 0;
			
			background-color: #EBEBEB;
		}


		/*Header*/
		.header{
			position: relative;
			background-color: #FF8C00;
			height: 70px;



		}

		#logo{
			text-align: center;
			text-decoration: none;
			color:black;
			
			position: absolute;
			left:30px;
			top:18px;
			font-size: 30px;

		}

		.search_container{
			position: absolute;
			left:260px;
			top:21px;
			
			
		}

		.search_container input[type=text]{
			border:1px solid black;
			width:450px; 
			height: 30px;
		}

		.search_container button{
			height: 34px;
			margin-left: -4px;
		}



		.header_links{
			
			position: absolute;
			top:30px;
			right:30px;
		}

		.header_links a{

			text-decoration: none;
			color:black;
			text-align: center;
			font-size: 17px;

			
			margin-right:  10px;
			margin-left: 10px;
		}

		.header_links a:hover{
			border-bottom: 3px solid white;
		}


		.header_links .icon{
			display: none;
			z-index: 999;
		}

		#show_search{
			display: none;
		}
	
	


		

		/*Header finish*/


/*===============================================================================================================*/
		/*Footer start*/


		.footer{
			
			
			
			position: relative;
			left: 0;
			bottom:0;

			background-color: #FF8C00;
			margin-left: 20px;
			margin-right: 20px;

			display: grid;
			grid-template-columns: repeat(3,1fr);
			grid-gap:10px;

			margin-top:10px;

			grid-auto-rows: minmax(50px,auto); 

			


		}
		.foot{
			
			grid-column-start:1;
			grid-column-end: -1;	 
			display: grid;
			grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
		}



		.useful_links{
			
			display: grid;
			justify-content: center;


		}

		#useful_links_logo{
			margin-top:10px;
			margin-bottom: 10px;
			margin-left:20px;
		  
			font-size: 25px;
		}

		.links{
			
			
			margin-bottom: 10px; 
		}

		.links li{
			margin-bottom: 10px; 
		}

		.links ul{
			list-style-type: none;
		}

		.links a{
			text-decoration: none;
			color:black;
			
		}



		.links a:hover{
			
			color:#268ccc;
		}








		/*Contacts on footer*/
		.contacts{
			
			display: grid;
			justify-items: center;
			
			
		}



		.get_in_touch{

			display: grid;
			grid-template-columns: repeat(auto-fill,minmax(150px,1fr)); 
		}


		.get_in_touch span{
		
			display: grid;
			grid-column-start: 1;
			grid-column-end: -1;

			
		}

		#contacts_logo{
			margin-left: 40px;
			margin-top:10px;
			margin-bottom: 10px;
			font-size: 25px;
			display: grid;
			grid-column-start: 1;
			grid-column-end: -1;
		}

		#location_icon{
			font-size: 18px;
		}

		#phone_icon{
			font-size: 23px; 
		}
		/*Contacts on footer finish*/








		/*Follow us on footer*/

		.follow_us a{
			text-decoration: none;

		}



		#follow_word{
			font-size: 25px;
			margin-top: 10px;
			margin-bottom: 10px;
			display: grid;
			justify-items: center;
			align-self: center;
			grid-column-start: 1;
			grid-column-end: -1;
			

		}

		.follow_logo {
			
			display: grid;

			grid-template-columns: repeat(2,1fr);
			grid-gap: 10px;




		}

		.follow_logo>div{
			display: grid;
			justify-self: center;
			align-self: center;
			

		}


		

		#facebook_icon{
			border:1px solid red;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content: center;
			align-items: center;
			background-color: red;
			color: white;
		}


		#facebook_icon:hover{
			color:#268ccc;
		}

		#twitter_icon{
			border:1px solid red;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content: center;
			align-items: center;
			background-color: red;
			color: white;

		}

		#twitter_icon:hover{
			color:#268ccc;
		}

		#vk_icon{
			border:1px solid red;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content: center;
			align-items: center;
			background-color: red;
			color: white;

		}

		#vk_icon:hover{
			color:#268ccc;
		}


		#google_icon{
			border:1px solid red;
			background-color: red;
			color: white;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content:  center;
			align-items: center;


		}

		#google_icon:hover{
			color:#268ccc;
		}

		#insta_icon{
			border:1px solid red;
			background-color: red;
			color: white;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content:  center;
			align-items: center;

		}

		#insta_icon:hover{
			color:#268ccc;
		}


		#git_icon{
			border:1px solid red;
			background-color: red;
			color: white;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content:  center;
			align-items: center;

		}

		#git_icon:hover{
			color:#268ccc;
		}





		/*Follow us on footer finish*/




		.rights{
			border-top: 1px solid black;
			display: grid;
			grid-template-columns: 1fr;
			grid-column-start:1;
			grid-column-end: -1; 
			justify-self: center;
			
			
		}


		/*Footer ends*/
/*=================================================================================================*/
		
		
		

		.main_page_categories{
			margin: 20px;
			margin-top: 40px;
			background-color: white;
			padding: 10px;
		}

		.categories_list{
			margin: 20px;
			display: grid;
			grid-template-columns:repeat(auto-fill,minmax(199px, 1fr));
			grid-gap: 20px; 
		}


		.link_kids{
			border: 1px solid gray;
			display: grid;
			justify-self: center;
			grid-template-columns: 1fr;
			grid-gap: 5px;
			border-radius: 5px;
		}

		.link_kids:hover{
			box-shadow: -1px 2px 8px 4px rgb(192,192,192);
		}

		#forKids{

			display: grid;
			justify-content: center;
			
		}


		img{

			border-radius: 5px;
			width: 194px;
			height: 210px;
		}


		a{
			text-decoration: none;
			color: black;
		}


/*===========================================================================================*/		
		/*Orange layer*/


		.next_page{
			border: 3px solid #FF8C00;
			margin-top:20px; 
			margin-bottom: 20px;
			margin-right: 20px;
			margin-left: 20px;
			background-color: white;

			display: grid;
			grid-template-columns: repeat(1,1fr);
			grid-template-rows: repeat(1,200px);

		}


		.next_page>div{
			border: 1px solid #FF8C00;
			background-color: #FF8C00;
			display: grid;


		}
/*=====================================================================================================*/
	/*Rules page*/

		.rules_page{
			margin-top:20px; 
			margin-bottom: 20px;
			margin-right: 20px;
			margin-left: 20px; 
			background-color: white;

			display: grid;
			grid-template-columns: repeat(auto-fit,minmax(250px, 1fr));
			



		}




		.f_rule{
			
			display: grid;
			justify-content: center;
			
			grid-gap: 10px;

			


		}

		#truck_icon{

			
			color: orange;
			font-size: 150px;
			display: grid;
			justify-self: center;
		}

		#big_word{
			
			font-size: 20px;
			display: grid;
			justify-self: center;


		}

		#small_word{
			
			display: grid;
			justify-self: center;

			font-size: 16px;
			line-height: 1.6;

		}


		.intro{
			background-color: white;
		
			margin:20px;
			display: grid;

			line-height: 1.6;
			grid-template-columns: repeat(auto-fill,minmax(1fr, auto));

		}


		#intro_big{
		
			display: grid;
			grid-column-start: 1;
			grid-column-end: -1;
			grid-template-columns: repeat(auto-fit,minmax(150px,1fr));
			justify-items: center;
			font-size: 40px;
		}

		#intro_small{
			display: grid;
			grid-template-columns: 1fr;
			font-size: 17px;
		}
/*=====================================================================================================*/

		.withus{
			
			display: grid;
			justify-items: center;
		}

		.withus>span{
			font-size: 20px;
		}

		.withus>ul{
			
			display: grid;
			justify-items:center;
		}

		.lastIntro>span{
			display: grid;
			justify-items: center;
			font-size: 25px;
		}



/*================================================================================================================*/
		/*Login.php*/





		.form-log{
			background-color: white;
			margin: 20px;
			min-height: 50vh;
			display: grid;
			justify-content: center;
			grid-template-columns: repeat(auto-fit,minmax(200px, 1fr)); 



			


		}
		

		.tab{
			margin: 20px;
			padding: 20px;
			border: 2px solid #FF8C00;
			display: grid;
			grid-template-columns: repeat(2,minmax(100px, 1fr));
			grid-template-rows: 50px;
			justify-self: center;
			grid-gap: 25px;

			

		}



		.tab-links{
			margin: 40px;
			padding-right: 40px;
			padding-left: 40px;
			font-size: 20px;
			
			justify-self: center;
			align-self: center;



			
			
		}


		.login-form{
			display: grid;

			
			grid-template-columns: repeat(auto-fit,minmax(100px, 1fr));
				


		}

		.login-form>form{

			display: grid;
			grid-gap: 10px;
			grid-template-rows:repeat(3,32px);

			
			
			
			
		}

		.sign-form{
			display: grid;

			
			
			
			grid-template-columns: repeat(auto-fit,minmax(100px, 1fr));

		}

		.sign-form>form{

			display: grid;
			grid-gap: 10px;	

			grid-template-rows:repeat(5,32px);


		}

		.border-black{
			border: 1px solid black;
		}



		.form-exit{
			background-color: white;
			margin: 20px;
			display: grid;
			justify-content: center;
			grid-template-columns: repeat(auto-fit,minmax(200px, 1fr)); 

			grid-template-rows: repeat(auto-fit,minmax(500px,1fr));

		}
		.tab-exit{
			margin: 20px;
			padding: 20px;
			border: 2px solid #FF8C00;
			display: grid;

			grid-template-columns: repeat(2,minmax(100px, 1fr));
			grid-template-rows: 50px;
			justify-self: center;

			grid-gap: 20px;


		}
		#exit{
			color: orange;
			border-bottom: 1px solid orange;
		}


	</style>
</head>
<body>

	<?php require_once "blocks/header.php"?>

	<?php
		if(!isset($_COOKIE['user'])):
	?>

	<div class="form-log">
		
		<div class="tab">
			<a class = "tab-links active" >Login</a>
			
			<a class = "tab-links" >Sign up</a>


			<div class="login-form" >


				<form action="login.php" method="post">
					<input class="border-black" type="text" name="login" placeholder="email">
					<input class="border-black" type="password" name="password" placeholder="password">


					<input class="border-black" type="submit" name="logButton" value="Log in">	

					<?php
					if(isset($_POST["logButton"])){
						if($error==true){
							echo "<span style=\"color:red;\">".$error_name."</span>";
							echo "<span style=\"color:red\">".$error_sname."</span>";
						}
						if($error==false){
							if(empty($user)){
								$error_check = "Please check login or password!";
								echo "<span style=\"color:red;\">".$error_check."</span>";
							}
						}
					}

					?>
				</form>
			
			</div>

			<div class="sign-form">
			
				<form action="login.php" method="post">
					<input class="border-black" type="text" name="name" placeholder="name">
					
					<input class="border-black" type="text" name="surname" placeholder="surname">
					<input class="border-black" type="text" name="login" placeholder="login">
					<input class="border-black" type="password" name="password" placeholder="password">


					<input class="border-black" type="submit" name="signButton" value="Sign up">
					<?php
					if(isset($_POST["signButton"])){
						if($error==true){
							echo "<span style=\"color:red;\">".$error_name."</span>";
							echo "<span style=\"color:red\">".$error_sname."</span>";
						}

					}

					?>
				</form>
			</div>
		</div>
	</div>
	<?php else:?>
		<div class="form-exit">
			<div class="tab-exit">
				<p>You are already in system <?=$_COOKIE['user']?>.If you want to exit just press <a id="exit" href="exit.php">exit</a>.</p>

			</div>
			
		</div>
			
	<?php endif;?>
	<?php require_once "blocks/footer.php"?>
</body>
</html>