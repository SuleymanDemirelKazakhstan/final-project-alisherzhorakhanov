<!DOCTYPE html>
<html>
<head>
<title>Главная страница</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" type="text/css" href="css/media.css">

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
			font-size: 25px;
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
			font-size: 20px;
		}





	
	</style>
</head>
<body>
	<?php require_once "blocks/header.php" ?>

	<div class="main_page_categories">
		
		<div class="categories_list">
			
			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/1.jpg" id="first" alt="for kids">
				</div>

				<div id="">
				<span id="forKids">Детям</span>
				</div>
			</a>

			<a href="category_detective.php" class="link_kids">
				<div class="category_kids">
					<img src="img/2.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Детективы</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/3.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Ужасы</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/4.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Фэнтези и фантастика</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/5.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Драмы</span>
				</div>
			</a>


			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/6.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Биография</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/7.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Поэзия</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/8.jpg" alt="for kids">
				</div>

				<div >
				<span id="forKids">Юмор и сатира</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/9.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Военная литература</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/10.jpg" alt="for kids">
				</div>

				<div >
				<span id="forKids">Романы</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/11.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Триллеры</span>
				</div>
			</a>


			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/12.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Духовная литература</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/13.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Научно-Образовательная</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/14.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Боевики</span>
				</div>
			</a>

			<a href="category_kids.php" class="link_kids">
				<div class="category_kids">
					<img src="img/15.jpg" alt="for kids">
				</div>

				<div>
				<span id="forKids">Приключения</span>
				</div>
			</a>
		</div>
		
	</div>


	<div class="next_page">

		<div>	

		</div>
	</div>

	<div class="rules_page">

		<div class="f_rule">

			<i id="truck_icon" class="fa fa-truck"></i>
			
			<span id="big_word">Доставка по всей России и заграницу</span>
			
			<span id="small_word">Доставим Ваш заказ в любую точку мира почтой или транспортной компанией, так же есть возможность самовывоза.
			</span>


			
		</div>

		<div class="f_rule">

			<i id="truck_icon" class="fa fa-credit-card"></i>

			<span id="big_word">Оплата онлайн</span>
			
			<span id="small_word">Оплата заказа различными способами: банковской картой, по квитанции, или онлайн через платежные сервисы.
			</span>


			
			
		</div>

		<div class="f_rule">
			<i id="truck_icon" class="fa fa-map-marker"></i>

			<span id="big_word">Мы находимся в Кузбассе</span>
			
			<span id="small_word">По адресу г. Новокузнецк, улица Рудокопровая, 30, корп. 4 (2 этаж). Приходите c понедельника по пятницу с 9 до 18 час. Мы всегда Вам рады!
			</span>
			

		</div>
		


	</div>

	<div class="next_page">

		<div>	

		</div>

		<div>
			
		</div>

		<div>
			
		</div>

		<div>
			

		</div>
		

	</div>



	<div class="intro">
		
		<div>
			
			<span id="intro_big">Добро пожаловать в интернет-магазин FindBook</span>
			

			<div class="withus">
			<span>Только у нас Вы:</span>
			<ul>
				<li>найдете последние книжные новинки;</li>
				<li>познакомитесь с отзывами на интересующие Вас произведения;</li>
				<li>узнаете свежие новости из мира литературы;</li>
				<li>быстро и грамотно получите консультацию по любым вопросам, связанным с покупкой и реализацией книг.
				</li>
			</ul>
			</div>

			<div class="withus">
			<span>Мы предлагаем книги во всех возможных жанрах:</span>
			<ul>
				<li>фантастика и фэнтези;</li>
				<li>любовный и исторический роман;</li>
				<li>детективы и боевики;</li>
				<li>психологические драмы и триллеры;</li>
				<li>юмор и сатира и многое, многое другое.</li>
			</ul>
			</div>


			
			<div class="withus">
			<span>По вопросам сотрудничества вы можете обратиться к нам:</span>
			<ul>
				<li>по электронной почте 180103273@stu.sdu.edu.kz</li>
				<li>или по телефону 8-702-483-98-76</li>
			</ul>
			</div>
			
			<div class="lastIntro">
			<span >У нас удобная форма заказа и доставка во все уголки России и мира!</span>
			</div>
		</div>

	</div>

	<?php require_once "blocks/footer.php" ?>
</body>
</html>