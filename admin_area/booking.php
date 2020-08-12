


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
			<h1 style='color:white;text-align:center;'> <b>Select Area</b></h1>
			
			<?php
			  
		     
	   get_city();
	   ?>
			
    
	   

	
	
	   
	 
	
	
	
	   </div>
	  </div>
			<div id="sidebar">
			
				<div id="sidebar_title">category</div>
				<ul id="cats">
					<li><a href="index.php">Movies</a></li>
					
					
				</ul>
				<div id="sidebar_title">Languages</div>
				<ul id="cats">
				<?php get_lan();?>
				
				
				</ul>

			</div>
				
		
			<div id="footer">
			          Contact:7835282319
					  
					   email:movie@gmail.com
			
		</div>
		
		
	
	</body>
</html>





















</html>