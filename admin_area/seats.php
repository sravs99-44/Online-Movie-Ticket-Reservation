<html>
<head>
<title>Seats page</title>
</head>
<body bgcolor="#ff0066">
<form action="seats.php" method="post" enctype="multipart/form-data">
<table align="center" width="800" border="2" bgcolor="#ffcc00">


   <tr align="center">
		<td colspan="8"><h2>Seats Information </h2></td>
	</tr>
	<tr>
		<td align="right"><b>Screen Id:</b></td>
		<td align="left"><input type="text" name="screen_id" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Row Name:</b></td>
		<td align="left"><input type="text" name="rowname" required/></td>
	</tr>
		<tr>
		<td align="right"><b>Seat Number:</b></td>
		<td align="left"><input type="text" name="seatnum" required/></td>
	</tr>
		<tr>
		<td align="right"><b>Image Url:</b></td>
		<td align="left"><input type="file" name="image_url" required/></td>
	</tr>
	<tr align="center">
	<td colspan="8"><input type="submit" name="insert_city" value="update" /></td>
	</tr>

</table>
</form>
</body>

</html>
<?php

 if(isset($_POST['insert_city']))
 {
	   $con = mysqli_connect("localhost","root","","test");
	   $screenid = $_POST['screen_id'];
	   $rowname= $_POST['rowname'];
	   $seatnum= $_POST['seatnum'];
	   $image= $_POST['image_url'];
	   $image_tmp= $_FILES['image']['tmp_name'];
	   move_uploaded_file($image_tmp,"seatimages/$image");
	   
	   $insert_query = "insert into screen(screenid,rowname,seatname,imageurl)
	   values ('$screenid','$rowname','$seatnum','$image')";
	   $log = mysqli_query($con,$insert_query);
	   
	   if($log)
	   {
		   
		   echo "<script>alert('seat added  successful')</script>";
	   }
	   else
		   echo "insertion failed";
	   
	   



	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 }












?>