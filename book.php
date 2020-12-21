<?php
 	$id=$_GET['book_id'];

	$mysql = mysqli_connect('localhost','root','','findbook');

	if(!$mysql){
		die("Connection failed".mysqli_connect_error());
	}
		
	$sql="SELECT * FROM `books` WHERE `book_id`='$id'";
	$result=mysqli_query($mysql,$sql);

	if(mysqli_num_rows($result)>0){
		$book=mysqli_fetch_assoc($result);
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $book['book_name'];?></title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/media.css">
<script type="text/javascript" src="js/main.js"></script>

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

		.category-kids-body{
			/*border: 1px solid black;*/
			margin: 20px;
			display: grid;
			

			grid-template-columns: 0.5fr 2fr 0.5fr;
			height: auto;
			
			grid-gap: 30px;

		}
/*====================================================================================================================*/
/*Left sidebar*/
		.left-category-sidebar{
			background-color: white;
			display: grid;
			height: 480px;			
		}

		.left-category-sidebar>a{
			border-bottom: 1px solid gray;
			display: grid;
			height: 30px;
			text-indent: 10px;
			align-items: center;
		}

		.left-category-sidebar>a:hover{
			box-shadow: -2px 3px 12px 1px rgba(0,0,0,0.75);
			
		}

		.left-category-sidebar span{
			color: orange;
		}

/*====================================================================================================================*/
/*Main bar*/
		.book-info{			
			background-color: white;
			height: auto;
			display: grid;
			grid-template-columns: 1fr;
		}

		.book-name{
			border-bottom: 1px solid gray;			
			display: grid;
			height: 80px;
			grid-template-columns: repeat(auto-fit,minmax(150px, 1fr));
		}

		.book-name span{
			display: grid;
			align-self: center;
			margin: 20px;
			font-size: 30px;
		}

		.book-details{
			height: 480px;
			display: grid;
			grid-template-columns: repeat(auto-fit,minmax(200px, 1fr));
			grid-column-start: 1;
			grid-column-end: -1;
		}

		.book-image{
			
			display: grid;
			margin: 20px;
			align-self: center;
			justify-self: center;
			

		}

		.image-book{
			width: 220px;
			height: 290px;
		}

		.book-character{
			
			display: grid;
			grid-column-start: 2;
			grid-column-end:-1;
			grid-template-columns:repeat(auto-fit,minmax(400px, 1fr));



		}

		#charac-word{
			
			display: grid;
			font-size: 25px;
			height:40px;
			justify-self: center;
			
		}

		tr,td{
						

		
		}
		td{
			padding: 10px;
			display: grid;
			justify-self: center;
			
		}

		tr{
			border-bottom: 1px solid gray;
			display: grid;
			grid-template-columns: repeat(2,1fr);



		}

		
		.table-book-character{
			
			border-collapse: collapse;
			display: grid;
			height: 350px;
			align-items: center;



			
		}



		.book-overview{
			
			height: auto;
			display: grid;
			margin-top:20px; 
			
			grid-template-columns: 1fr;
		}

		#overview-word{
			font-size: 25px;
			
			height: 40px;
			
			justify-self: center;
		}

		#story-book{
			text-indent: 40px;
			font-size: 17px;
			
			line-height: 1.6;
		}

		
/*====================================================================================================================*/
/*Right sidebar*/
		.category-books-filter{
			/*border: 1px solid black;*/
			height: 300px;
			background-color: white;
			display: grid;
			grid-template-columns: 1fr;
			grid-template-rows: 80px;


		}

		.filter-word{
			/*border: 1px solid red;*/
			text-indent: 5px;
			font-size: 25px;
			color: #FF8C00;
			align-self: center;


		}

	
		.filter-form-params input[type=submit]{
			font-size: 16px;
			color: white;
			border: 1px solid orange;
			background-color: #FF8C00;

		}


		.filter-form-params form{
			display: grid;
			grid-gap: 5px;
			grid-template-columns:200px;
			grid-template-rows: repeat(5,30px);
			justify-content: center;
		}

		#status{
			color: green;
		}
	</style>
</head>
<body>
	<?php require_once "blocks/header.php" ?>

	<div class="category-kids-body">

<?php require_once "blocks/left_sidebar.php" ?>

	<?php
		echo "<div class=\"book-info\">
	
		<div class=\"book-name\">
			<span id=\"name-book\">".$book['book_name']."</span>
		</div>

		<div class=\"book-details\">
			
			<div class=\"book-image\">
				<img src=\"uploads/".$book['book_image']."\" class=\"image-book\">
			</div>

			<div class=\"book-character\">
				<span id=\"charac-word\">Characteristics</span>
				

				<table class=\"table-book-character\">
					<tr>
						<td>Author</td>
						<td>".$book['book_author']."</td>
					</tr>

					<tr>
						<td>Amount of pages</td>
						<td>".$book['num_pages']."</td>
					</tr>

					<tr>
						<td>Release date</td>
						<td>".$book['book_release']."</td>
					</tr>

					<tr>
						<td>Status</td>
						<td><span id=\"status\">".$book['book_status']."</span></td>
					</tr>

					<tr>
						<td>Age restriction</td>
						<td>+".$book['age_restric']."</td>
					</tr>

					<tr>
						<td>Format</td>
						<td>".$book['book_format']."</td>
					</tr>

					<tr>
						<td>Weight</td>
						<td>".$book['book_weight']."</td>
					</tr>

					<tr>
						<td>Cover</td>
						<td>".$book['book_cover']."</td>
					</tr>
					<tr>
						<td>Contact name</td>
						<td>".$book['contact_name']."</td>
					</tr>
					<tr>
						<td>Telephone</td>
						<td>".$book['contact_phone']."</td>
					</tr>
				</table>
			
			</div>

		</div>
	
		<div class=\"book-overview\">
			<span id=\"overview-word\">Overview</span>

			<span id=\"story-book\">".$book['overview_text']."</span>
		</div>
	</div>
	";

	?>
	</div>

	<?php require_once "blocks/footer.php" ?>

<?php mysqli_close($mysql); ?>
</body>
</html>