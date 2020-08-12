<!DOCTYPE>
<?php
  include("functions.php");
  ?>


<html>
	<head>
		<title>movie ticket reservation</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" media="all">
	</head>
	<body >
	
		<div class="main_wrapper">
			<div class ="header_wrapper">
			
			<img id ="banner" src="images/movieticketbooking.jpg" width="150%" height="200px" align="center">
			</div>
		<div>	
		<div class="menubar">	
			<ul id="menu">
				<li><a href="index.php">home</a></li>


				<li><a href="customerinfo.php">signup</a></li>
				<li><a href="login_info.php">Log in</a></li>
				<li><a href="#">booking</a></li>
				<li><a href="#footer">Contact us</a></li>
			</ul>
			<div id="form">    
				<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="search a movie"/>
				<input type="submit" name="search" value="search"/>
				</form>
			</div>
		</div>
		<div class="content_wrapper">
		    <div style="background-color:#665200" id ="content_area">
    
<?php
   global $con;	
	if(isset($_GET['mo_id'])){
		
		
	$movie_id = $_GET['mo_id'];
	$get_mo = "select * from movie where movie_id='$movie_id'";
	$run_mo = mysqli_query($con,$get_mo);
	
	
	while($row_mo=mysqli_fetch_array($run_mo)){
			$mo_id=$row_mo['movie_id'];
			$mo_name=$row_mo['movie_name'];
			$mo_director=$row_mo['movie_director'];
			$mo_producer=$row_mo['movie_producer'];
			 $mo_image=$row_mo['movie_image'];
			$mo_desc=$row_mo['movie_description'];
			
			echo "
			
			 <div id='movie_title'>
			
			  <h3>$mo_name</h3>
			  </div>
			  
			  <div id='movie_image'>
			  <img src='movie_images/$mo_image' width='400' height='300' /></div>
			  <div id='movie_desc'>
			  Movie Director:$mo_director<br>
			  Movie Producer:$mo_producer<br>
			  Movie Description:$mo_desc<br>
			  </div>
			  <div id='links'>
			  <a style='color:#f9ecec;text-decoration:underline;' href='booking.php?'>Book Tickets</a>
			  
			  <a style='color:#ccffe6;text-decoration:underline;' href ='index.php'>Go Back</a>	
			  </div>
               			  
					
			";
	}}
?>	
	   
	 
	 
	
	
	
	<div>
	 
	
	
	
	</div>
	</div>
			<div id="sidebar">
			
				<div id="sidebar_title">category</div>
				<ul id="cats">
					<li><a href="#">Movies</a></li>
					
					
				</ul>
				<div id="sidebar_title">Languages</div>
				<ul id="cats">
				<?php get_lan();?>
				</ul>

			</div>
		</div>		
		
			<div id="footer">
			          Contact:7835282319
					  
					   email:movie@gmail.com
			
		</div>
		
		
	
	</body>
</html>
