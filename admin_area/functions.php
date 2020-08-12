<?php
$con = mysqli_connect("localhost","root","","test");
//getting the languages
function get_lan()
{
	global $con;	
	$get_mov = "select * from languages";
	$run_mov = mysqli_query($con,$get_mov);
	while ($row_mov = mysqli_fetch_array($run_mov))
	{
		$lan_id = $row_mov['lan_id'];
	  $mov_title = $row_mov['lan_name'];
	   echo "<li><a href='index.php?lan=$lan_id'>$mov_title</a></li>";
    }	 
		
		
	
	
	
	
	
	
}
function get_city()
{
	global $con;	
	$get_mov = "select * from city";
	$run_mov = mysqli_query($con,$get_mov);
	while ($row_mov = mysqli_fetch_array($run_mov))
	{
		$city_id = $row_mov['cityid'];
	  $city_name = $row_mov['cityname'];
	   echo
	   "
	   
	   <div id='city'>
	   
	   <li><a style='color:yellow;text-decoration:none;' href='location.php?city=$city_id'>$city_name</a></li></div>
	   
	   ";
	   
    }	
     	
}

function get_movie(){
	
	if(!isset($_GET['lan'])){
	global $con;
	$get_mo = "select * from movie order by RAND() LIMIT 0,9";
	$run_mo = mysqli_query($con,$get_mo);
	
	
	while($row_mo=mysqli_fetch_array($run_mo)){
			$mo_id=$row_mo['movie_id'];
			$mo_name=$row_mo['movie_name'];
			$mo_director=$row_mo['movie_director'];
			$mo_producer=$row_mo['movie_producer'];
			 $mo_image=$row_mo['movie_image'];
			
			
			echo "
			<div style='background-color:#665200' id='single_movie'>
			 <div id='movie_title'>
			
			  <h3>$mo_name</h3>
			  </div>
			  
			  <img src='movie_images/$mo_image' width='180' height='180' />
			  <a style='color:#ccffe6;text-decoration:underline;' href ='details.php?mo_id=$mo_id'><h3>About movie</h3></a>	
               			  
			</div>		
			";
	}}	
}

function get_lan_movie(){


	if(isset($_GET['lan'])){
		$lan_id =$_GET['lan'];
	global $con;
	$get_lan = "select * from movie where movie_language='$lan_id'";
	$run_lan = mysqli_query($con,$get_lan);
	
	while($row_mo=mysqli_fetch_array($run_lan)){
			$mo_id=$row_mo['movie_id'];
			$mo_name=$row_mo['movie_name'];
			$mo_director=$row_mo['movie_director'];
			$mo_producer=$row_mo['movie_producer'];
			 $mo_image=$row_mo['movie_image'];
			
			
			echo "
			<div id='single_movie'>
			 <div id='movie_title'>
			
			  <h3>$mo_name</h3>
			  </div>
			  
			  <img src='movie_images/$mo_image' width='180' height='180' />
			  <a href ='details.php?mo_id=$mo_id'><h3>About movie</h3></a>	
               			  
			</div>		
			";
	}}	
} 





?>