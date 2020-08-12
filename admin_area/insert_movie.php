<!DOCTYPE>
<?php



include("includes/db.php");
?>
<html>
	<head>
	<title>Insertion Page</title>
	
	</head>
	<body bgcolor="yellow">
	
	
	<form action="insert_movie.php" method="post" enctype="multipart/form-data">
	<table align="center" width="1000" border="2" bgcolor="lightblue">
	<tr align="center">
		<td colspan="8"><h2>Insert new Post Here</h2></td>
	</tr>
	<tr>
		<td align="right"><b>Movie Title:</b></td>
		<td align="left"><input type="text" name="movie_title" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Movie Language:</b></td>
		<td>
		<select name="movie_lan">
			<option>select language</option>
			<?php
			$get_mov = "select * from languages";
			$run_mov = mysqli_query($con,$get_mov);
			while ($row_mov = mysqli_fetch_array($run_mov))
			{
			$lan_id = $row_mov['lan_id'];
			$lan_name = $row_mov['lan_name'];
			echo "<option value='$lan_id'>$lan_name</option>";
			}	 
			
			
			?>
		
		
		
		
		</select>
	</tr>
	<tr>
		<td align="right"><b>Movie Director :</b></td>
		<td align="left"><input type="text" name="movie_dir"/></td>
	</tr> 
	<tr>
		<td align="right"><b>Movie Producer:</b></td>
		<td align="left"><input type="text" name="movie_pro"/></td>
	</tr> 
	<tr>
		<td align="right"><b>Movie Description:</b></td>
		<td align="left"><textarea name="movie_description" cols="30" rows="10"></textarea></td>
	</tr> 
	<tr>
		<td align="right"><b>Movie Image:</b></td>
		<td align="left"><input type="file" name="movie_image"/></td>
	</tr> 
	
		
	<tr align="center">
	<td colspan="8"><input type="submit" name="insert_post" value="insertnow" /></td>
	</tr>
	
	 
</table>
	</form>
</html>	
	
	
	
	
	
	
	
	
<?php
    if(isset($_POST['insert_post']))
	{
		//getting the data from fields
		$movie_title = $_POST['movie_title'];
		$movie_lan= $_POST['movie_lan'];
		$movie_desc= $_POST['movie_description'];
		
		$movie_dir=$_POST['movie_dir'];
		$movie_pro =$_POST['movie_pro'];
		//getting image2
		$movie_image= $_FILES['movie_image']['name'];
		$movie_image_tmp= $_FILES['movie_image']['tmp_name'];
		
		
		
		move_uploaded_file($movie_image_tmp,"movie_images/$movie_image");
		
		$insert = "insert into movie
		(movie_name,movie_image,movie_director,movie_producer,movie_description,movie_language) 
		values('$movie_title','$movie_image','$movie_dir','$movie_pro','$movie_desc','$movie_lan')";
		
		
		
		$insert_mo = mysqli_query($con,$insert);
		
		
		if($insert_mo){
			
			
			
			echo "<script>alert ('inserted succesfully')</script>";
			echo "<script>window.open('insert_movie.php','_self')</script>";
		}
		
		
		
		
		
		
		
		
		
		
		
	}



















?>
