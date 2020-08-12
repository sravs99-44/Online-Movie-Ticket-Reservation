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
	if(isset($_GET['city'])){
		
		
	$city_id = $_GET['city'];
	$get_mo = "select * from theatre where cityid='$city_id'";
	$run_mo = mysqli_query($con,$get_mo);
	
	
	while($row_mo=mysqli_fetch_array($run_mo)){
			$the_id=$row_mo['theatreid'];
			$the_name=$row_mo['theatrename'];
			$the_address=$row_mo['address'];
			$the_pincode=$row_mo['pincode'];
			 $the_noofscreens=$row_mo['noofscreens'];
			
			
			echo "
			
			 <div id='movie_title'>
			
			  <h3>$the_name</h3>
			  </div>
			  
			  
			  <div id='movie_desc'>
			  Theatre Address:$the_address<br>
			  Pincode:$the_pincode<br>
			  Noofscreens:$the_noofscreens<br>
			  </div>
			  <div id='links'>
			  <a style='color:#f9ecec;text-decoration:underline;' href='showdetails.php?the_id=$the_id'>show details</a>
			  
			  <a style='color:#ccffe6;text-decoration:underline;'href ='index.php'>Go Back</a>	
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
