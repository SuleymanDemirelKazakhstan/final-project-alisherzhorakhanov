<?php
	$mysql = mysqli_connect('localhost','root','','findbook');

	if(!$mysql){
		die("Connection failed".mysqli_connect_error());
	}
		
	$sql="SELECT * FROM `users`";
	$result=mysqli_query($mysql,$sql);
	
	$array=array();
	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$array[] = $row;
		}
	}

	$sql1="SELECT * FROM `books`";
	$result1=mysqli_query($mysql,$sql1);
	
	$array1=array();
	
	if(mysqli_num_rows($result1)>0){
		while($row1=mysqli_fetch_assoc($result1)){
			$array1[] = $row1;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" type="text/css" href="css/media.css">

<style type="text/css">

	body{
		margin: 0;
	}

	a{
		text-decoration: none;
		color: black;
	}

	table,th,td{
		border: 1px solid black;
		border-collapse: collapse;
	}

	th,td{
		padding-top: 5px;
		
		padding-bottom: 5px;
		
	}
	.header{
		
		display: grid;
		grid-template-columns: repeat(1,minmax(150px, 1fr));
		grid-template-rows: 50px;
		background-color: #FF8C00;
	}

	.header-div{
		
	}
	
	.body{
		/*border: 2px solid red;*/
		min-height: 100vh;
		margin-top: 10px;
	}

	.main-content{
		/*border: 2px solid violet;*/
		display: grid;
		grid-gap: 10px;

	}


	.nav-links{
		/*border: 2px solid black;*/
		display: grid;
		grid-template-columns: repeat(auto-fit,minmax(100px, 1fr));

	}

	.link{
		border: 1px solid black;
		display: grid;
		justify-items:center;
		font-size: 18px;
	}

	.link.active{
		color: #FF8C00;
	}
	.link:hover{
		border-bottom: 3px solid #FF8C00;
	}

	.users-table{
	
	}

	.users-table-in{
		display: grid;
		justify-content: center;
	
		grid-template-columns: repeat(auto-fit,minmax(400px, 1fr));

	}
	.span-user{
	
		display: grid;
		justify-content: center;
		grid-column-start: 1;
		grid-column-end: -1;
	}
	#table{
		font-size: 18px;
	}

	.tableWithBooks{

		display: grid;
		
		justify-content: center;
		grid-column-start: 1;
		grid-column-end: -1;
		
	}
	.tableWithUsers{

		display: grid;
		
		justify-content: center;
		grid-column-start: 1;
		grid-column-end: -1;
		
	}
	#more-link{
		border-bottom: 1px solid orange;
		width: 40px;
		
		
	}

	#more-link:hover{
		color: orange;
	}
	
	img{
		height: 100px;
		width: 120px;
	}
	
	.footer{
		position: relative;
		left: 0;
		bottom:0;
		background-color: #FF8C00;
		grid-template-columns: repeat(1,minmax(150px, 1fr));
		grid-template-rows: 50px;
		margin-top:10px;
		display: grid;
		 
	}

	.footer-div{
	

	}

</style>
</head>

<body>
	
	<div class="header">
		<div class="header-div">
			
		</div>
		

	</div>
	
	<div class="body">
		<div class="main-content">

			<div class="nav-links">
				<div class="link">
					<a href="">Analytics</a>
				</div>

				<div class="link">
					<a href="">First page</a>
				</div>
				
				<div class="link">
					<a href="">About us</a>	
				</div>
				
			</div>

			<div class="users-table">

				<div class="users-table-in">
					<div class="span-user">
						<span id="table">Table of books</span>
					</div>

					<div class="tableWithBooks">
						<table>
							<tr>
								<th>id</th>
								<th>book name</th>
								<th>book author</th>
								<th>Number of pages</th>
								<th>Release date</th>
								<th>Book status</th>
								<th>Age restriction</th>
								<th>Book format</th>
								<th>Book weight</th>
								<th>Book cover</th>
								<th>Contact name</th>
								<th>Contact phone</th>
								
								<th>Book category</th>
								<th>Book-image</th>
								<th>Action</th>
							</tr>

					<?php

						for($i=0;$i<count($array1);$i++){
							echo "
								<tr>
									<td>".$array1[$i]['book_id']."</td>
									<td>".$array1[$i]['book_name']."</td>
									<td>".$array1[$i]['book_author']."</td>
									<td>".$array1[$i]['num_pages']."</td>
									<td>".$array1[$i]['book_release']."</td>
									<td>".$array1[$i]['book_status']."</td>
									<td>".$array1[$i]['age_restric']."</td>
									<td>".$array1[$i]['book_format']."</td>
									<td>".$array1[$i]['book_weight']."</td>
									<td>".$array1[$i]['book_cover']."</td>
									<td>".$array1[$i]['contact_name']."</td>
									<td>".$array1[$i]['contact_phone']."</td>
									
									<td>".$array1[$i]['book_category']."</td>
									<td><img src=\"uploads/".$array1[$i]['book_image']."\" id=\"image\"></td>
									<td><a href=\"book_delete.php?user_id=".$array1[$i]['book_id']."\" id=\"more-link\">Delete</a></td>
									


								</tr>

								";
						}
					?>

						
						</table>
					</div>
				</div>

				
			</div>

			<div class="users-table">
				<div class="users-table-in">
					<div class="span-user">
						<span id="table">Table of users</span>
					</div>

					<div class="tableWithUsers">
						<table>
							<tr>
								<th>id</th>
								<th>name</th>
								<th>surname</th>
								<th>login</th>
								<th>password</th>
								<th>Action</th>
							</tr>

					<?php

						for($i=0;$i<count($array);$i++){
							echo "
								<tr>
									<td>".$array[$i]['id']."</td>
									<td>".$array[$i]['name']."</td>
									<td>".$array[$i]['surname']."</td>
									<td>".$array[$i]['login']."</td>
									<td>".$array[$i]['password']."</td>
									<td><a href=\"admin_delete.php?user_id=".$array[$i]['id']."\" id=\"more-link\">Delete</a></td>

								</tr>

								";
						}
					?>
						</table>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-div">
		</div>
	</div>

<?php
	mysqli_close($mysql);
?>
</body>
</html>