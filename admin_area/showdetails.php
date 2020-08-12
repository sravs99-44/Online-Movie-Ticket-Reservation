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
		<div class="content_wrapper">
		    <div  style="background-color:#665200" id ="content_area">
			
    
<?php
   global $con;	
	if(isset($_GET['the_id'])){
		
		
	$t_id = $_GET['the_id'];
	$get_mo = "select * from shows where theatreid='$t_id'";
	$run_mo = mysqli_query($con,$get_mo);
	
	
	while($row_mo=mysqli_fetch_array($run_mo)){
			$screen_id=$row_mo['screenid'];
			$movie_id=$row_mo['movieid'];
			
			$theatre_id=$row_mo['theatreid'];
			$start=$row_mo['starttime'];
			$end=$row_mo['endtime'];
			$date=$row_mo['date'];
			$classA=$row_mo['classA'];
			$classB=$row_mo['classB'];
	$classC=$row_mo['classC'];
	$get_mov = "select * from movie where movie_id='$movie_id' ";
	$run_mov = mysqli_query($con,$get_mov);
	while($row_mov=mysqli_fetch_array($run_mov)){
		$mo_id=$row_mov['movie_id'];
			$mo_name=$row_mov['movie_name'];
			$mo_director=$row_mov['movie_director'];
			$mo_producer=$row_mov['movie_producer'];
			 $mo_image=$row_mov['movie_image'];
	$get_the = "select * from theatre where theatreid='$t_id' ";
	$run_the = mysqli_query($con,$get_the);
	 while($row_the=mysqli_fetch_array($run_the)){
		 $the_name=$row_the['theatrename'];
		 $the_add=$row_the['address'];
		 $get_show = "select theatreid from shows where theatreid='$t_id' and movieid='$mo_id' ";
	      $run_show = mysqli_query($con,$get_show);
	    while($row_show=mysqli_fetch_array($run_show)){
		    
	   
	
			
		
	
			
			
			
			
			
			echo "
			
			 <div id='single_movie'>
			 <div id='movie_title'>
			
			  <h3>$mo_name</h3>
			  </div>
			  
			  <img src='movie_images/$mo_image' width='180' height='180' />
			  
			  
			  <div id='movie_desc'>
			  Theatre Name:$the_name<br>
			  Theatre address:$the_add<br>
			  start time:$start<br>
			  end time:$end<br>
			  date:$date<br>
			  classA cost:$classA<br>
			  class B cost:$classB<br>
			  class C cost:$classC<br>
			  </div>
			  <div id='links'>
			  <a style='color:#f9ecec;text-decoration:underline;' href='seatalloc.php'>select seats</a>
			  
			  <a  style='color:#ccffe6;text-decoration:underline;' href ='index.php'>Go Back</a>	
			  </div>
               			  
					
			";
	}}}}}
?>	
	   
	 
	 
	
	
	
	
	 
	
	
	</div>
			
		</div>		
		
			<div id="footer">
			          Contact:7835282319
					  
					   email:movie@gmail.com
			
		</div>
		
		
	
	</body>
</html>
