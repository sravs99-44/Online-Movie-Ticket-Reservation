<html>
<head>
<title>Screen page</title>
</head>
<body bgcolor="black">
<form action="screen.php" method="post" enctype="multipart/form-data">
<table align="center" width="800" border="2" bgcolor="#d1e0e0">


   <tr align="center">
		<td colspan="8"><h2>Screen Information </h2></td>
	</tr>
	<tr>
		<td align="right"><b>Screen Number:</b></td>
		<td align="left"><input type="text" name="screen_name" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Theatre Id:</b></td>
		<td align="left"><input type="text" name="theatreid" required/></td>
	</tr>
	<tr align="center">
	<td colspan="8"><input type="submit" name="insert_city" value="Insert_Screen" /></td>
	</tr>

</table>
</form>
</body>

</html>
<?php

 if(isset($_POST['insert_city']))
 {
	   $con = mysqli_connect("localhost","root","","test");
	   $name = $_POST['screen_name'];
	   $theatre= $_POST['theatreid'];
	   $insert_query = "insert into screen(screen_num,theatre_id) values ('$name','$theatre')";
	   $log = mysqli_query($con,$insert_query);
	   
	   if($log)
	   {
		   
		   echo "<script>alert('screen added  successful')</script>";
	   }
	   else
		   echo "insertion failed";
	   
	   



	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 }












?>