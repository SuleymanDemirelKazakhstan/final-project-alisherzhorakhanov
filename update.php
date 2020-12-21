<?php 		
		$id=$_GET['book_id'];

		$mysql = mysqli_connect('localhost','root','','findbook');

		if(!$mysql){
	 		die("Connection failed".mysqli_connect_error());
		}
	
		$sql="SELECT `book_id`,`book_name`, `book_author`, `num_pages`, `book_release`, `book_status`, `age_restric`, `book_format`, `book_weight`, `book_cover`, `contact_name`, `contact_phone`, `present_text`, `overview_text`, `book_category`, `book_image` FROM `books` WHERE `book_id`='$id'";

		$result=mysqli_query($mysql,$sql);

		if(mysqli_num_rows($result)>0){
			$book=mysqli_fetch_assoc($result);
 		}

?>

<!DOCTYPE html>
<html>
<head>
<title>Update</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="style.css">


	<style type="text/css">
		
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
			justify-self:center;
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
			justify-self: center;
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

		.main_page_categories{
			margin: 20px;
			margin-top: 40px;
			background-color: white;
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

		.category_kids{
			
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


		.rules_page{
			margin-top:20px; 
			margin-bottom: 20px;
			margin-right: 20px;
			margin-left: 20px; 
			background-color: white;

			display: grid;
			grid-template-columns: repeat(auto-fill,minmax(400px, 1fr));



		}

		.f_rule{
			
			display: grid;
			grid-template-columns: 1fr;
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
			justify-items: center;
			font-size: 40px;
		}

		#intro_small{
			display: grid;
			grid-template-columns: 1fr;
			font-size: 17px;
		}


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


/*===================================================================================================*/

		.container{
			background-color: white;
			margin: 20px;
			
			
			display: grid;
			justify-content: center;

			grid-template-columns: repeat(auto-fit,minmax(200px,600px));
			
		}

		.content{
			
			margin: 20px;
			
			
			height: auto;
			border: 2px solid #FF8C00;

			
		}

		#f-word-instructions-form{
			font-size: 20px;
			display: grid;
			justify-content: center;
		}

		.content-form form{
			display: grid;
			grid-gap: 10px;
			grid-template-columns: repeat(auto-fit,minmax(150px, 220px));
			grid-template-rows: repeat(11,30px);
			justify-content: center;

		}

		.content-form form input[type=text]{
			display: grid;
			grid-column-start: 1;
			grid-column-end: -1;

		}

		.content-form form input[type=submit]{
			display: grid;
			grid-column-start: 1;
			grid-column-end:-1;
			justify-self:center; 
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
	<?php require_once "blocks/header.php" ?>
	
	<?php
		if(isset($_COOKIE['user'])):
	?>
	
	<div class="container">
		<div class="content">
			<div class="instructions-form">
				<span id="f-word-instructions-form">Post Book</span>
				<p id="s-word-instructions-form">Please write all information about your book to this appropriate spaces.According to this information book will be sorted and will has more probability to be find.Good luck!
				</p>
			</div>
			
			<div class="content-form">
				<form action="newBook.php?book_id=<?=$book['book_id']?>" method="post" enctype="multipart/form-data">
					<input type="text" name="book_name" placeholder="book name"  style="" required="" value="<?=$book['book_name']?>">
					<input type="text" name="book_author" placeholder="book author" required="" value="<?=$book['book_author']?>">
					<input type="text" name="num_pages" placeholder="amount of pages" required="" value="<?=$book['num_pages']?>">
					<input type="text" name="date" placeholder="release date" required="" value="<?=$book['book_release']?>">
					<input type="text" name="status" placeholder="status" required="" value="<?=$book['book_status']?>">
					<input type="text" name="age_restric" placeholder="age restriction" required="" value="<?=$book['age_restric']?>">
					<input type="text" name="format" placeholder="format" required="" value="<?=$book['book_format']?>">
					<input type="text" name="weight" placeholder="weight" required="" value="<?=$book['book_weight']?>">
					<input type="text" name="cover" placeholder="cover of book" required="" value="<?=$book['book_cover']?>">
					<input type="text" name="contact_name" placeholder="contact name" required="" value="<?=$book['contact_name']?>">
					<input type="text" name="contact_phone" placeholder="telephone" required="" value="<?=$book['contact_phone']?>">

				

					<textarea id="text" rows="4" cols="50" name="present_text" placeholder="present text of overview" required="" ><?=$book['present_text']?></textarea>
					<div>
						<span id="lenText">0</span>
						<span>Characters</span><br>
						<span>Max 442 characters</span>
					</div>

					
					
					<textarea id="btext" rows="8" cols="50" name="overview_text" placeholder="overview text" required=""><?=$book['overview_text']?></textarea>
					<div>
						<span id="lenbText">0</span>
						<span>Characters</span><br>
						<span>Max 500 characters</span>
					</div>
					
					<select class="selection" name="category" required>
						<option value=""></option>
						<option value="kids">Детям</option>
						<option value="detective">Детективы</option>
						<option value="horror">Ужасы</option>
						<option value="fantasy">Фэнтези и фантастика</option>
						<option value="drama">Драмы</option>
						<option value="biography">Биография</option>
						<option value="poesia">Поэзия</option>
						<option value="comedy">Юмор и сатира</option>
						<option value="war">Военная литература</option>
						<option value="roman">Романы</option>
						<option value="triller">Триллеры</option>
						<option value="soul">Духовная литература</option>
						<option value="science">Научно-Образовательная</option>
						<option value="boevik">Боевики</option>
						<option value="journey">Приключения</option>
					</select>

    				<input type="file" name="file" required="" >
    				
    				<input type="submit" value="Update" name="update" >
				</form>
			</div>	
		</div>
	</div>

	<?php else:?>
		<div class="form-exit">
			<div class="tab-exit">
				<p>If you want to post book,you should log in.<a id="exit" href="login.php">Log in</a>.</p>
			</div>
			
		</div>
			
	<?php endif;?>

	<script type="text/javascript">
		var text = document.getElementById("text");
		var lenText = document.getElementById("lenText");
		var btext = document.getElementById("btext");
		var lenbText = document.getElementById("lenbText");
	

		text.addEventListener("keyup",function(){
			var characters = text.value.split('');
			lenText.innerText=characters.length;
			lenText.style.color="green";
			
		});

		btext.addEventListener("keyup",function(){
			var characters = btext.value.split('');
			lenbText.innerText=characters.length;
			lenbText.style.color="green";
			
		});

	</script>

	<?php require_once "blocks/footer.php" ?>
<?php 
	mysqli_close($mysql);

?>
</body>
</html>