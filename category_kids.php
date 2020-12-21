<?php 

	$mysql = mysqli_connect('localhost','root','','findbook');

	if(!$mysql){
		die("Connection failed".mysqli_connect_error());
	}
		
	$sql="SELECT * FROM `books` ORDER BY `book_id` DESC";
	$result=mysqli_query($mysql,$sql);
	
	$array=array();
	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$array[] = $row;
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Детям</title>

<link rel="icon" href="img/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/media.css">
<script type="text/javascript" src="js/main.js"></script>


<style type="text/css">
		
		@media screen and (max-width: 471px){
      		#image{
      			width: 150px;
      			height: 180px;
      		}
    	}

    	@media screen and (max-width: 376px){
    		.book-left{
    			display: grid;
    			
    		
    		}
    		.book-right{

    			
    		}

    		#image{
      			width: 118px;
      			height: 180px;

      		}

      		.book-image{
      			
      		}


      		#book-view-text{
      			font-size: 14px;
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
		.category_kids{
			
		}
		.category_kids>img{
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
	
/*=============================================================================================================*/

	.container-category{
		margin-top: 20px;
		margin-bottom: 20px;
		
		position: relative;
		min-height: 100vh;
		
	}


	.content{
		
		display: grid;

		grid-template-columns: repeat(auto-fit,minmax(300px, 900px));
		grid-template-rows: auto;
		justify-content: center;

	}

	
	.main-content{
		background-color: white;
		

		
	}

	.book{
		border: 1px solid gray;

		display: grid;
		grid-template-columns: repeat(auto-fit,minmax(150px, 1fr));
		grid-template-rows: 260px;


	}

	.book:hover{
		box-shadow: -2px 3px 12px 1px rgba(0,0,0,0.75);
		border: 3px solid orange;
	}
	.book-left{

		
		display: grid;
		grid-column-start: 1;
		grid-column-end: 4;

		grid-template-columns: repeat(auto-fit,minmax(120px, 1fr));

	}

	.book-image{
		
		display: grid;
		align-content: center;
		justify-content: center;
		

	}

	.book-text{
		
		display: grid;
		grid-column-start: 4;
		grid-column-end: -1;
		
		

	}

	img{
		border-radius: 5px;
		width: 165px;
		height: 190px;
	}

	#book-author-link{
		font-size: 20px;
		border-bottom: 1px solid orange;

	}

	#book-author-link:hover{
		color: orange;
	}

	.book-right{
		border-left: 1px solid gray;
		display: grid;
		align-content: center;
	}

	.book-links{
		margin-left: 10px;
		
		display: grid;
		grid-gap: 20px;
		
	}
	#more-link-add{
		border-bottom:1px solid orange;
		width: 112px;
	}

	#more-link-add:hover{
		color: orange;
	}

	#more-link{
		border-bottom: 1px solid orange;
		width: 40px;
		
		
	}

	#more-link:hover{
		color: orange;
	}
		
</style>
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	
	<div class="container-category">	

		<div class="content">

			<div class="main-content">
				
				<?php 
					$check=0;
					for ($i=0; $i < count($array); $i++) { 
						if($array[$i]['book_category']=='kids'){
							echo "<div class=\"book\">
						
					<div class=\"book-left\">
						<div class=\"book-image\">
							<img src=\"uploads/".$array[$i]['book_image']."\" id=\"image\">
														
						</div>

						<div class=\"book-text\">
							<span id=\"book-author-link-span\"><a href=\"book.php?book_id=".$array[$i]['book_id']."\" id=\"book-author-link\">".$array[$i]['book_name'].",by ".$array[$i]['book_author']."</a></span>

							<p id=\"book-view-text\">".$array[$i]['present_text']."</p>
							
						</div>
							
					</div>

					<div class=\"book-right\">
						<div class=\"book-links\">
							<a href=\"book.php?book_id=".$array[$i]['book_id']."\" id=\"more-link\">More</a>

							<a href=\"favorites.php?book_id=".$array[$i]['book_id']."\" id=\"more-link-add\">Add to favorites</a>

							<a href=\"update.php?book_id=".$array[$i]['book_id']."\" id=\"more-link\">Update</a>

							<a href=\"user_delete.php?book_id=".$array[$i]['book_id']."\" id=\"more-link\">Delete</a>
							
						</div>	
					</div>
																
				</div>";
							$check=1;
						}

					}
					if($check=0){
						echo "No results";
					}

				?>
									
			</div>	
			
		</div>
		
	</div>

	<?php require_once "blocks/footer.php" ?>

<?php mysqli_close($mysql); ?>
</body>
</html>