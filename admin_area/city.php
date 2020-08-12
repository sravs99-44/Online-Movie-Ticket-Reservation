<html>
<head>
<title>City  page</title>
</head>
<body bgcolor="black">
<form action="city.php" method="post" enctype="multipart/form-data">
<table align="center" width="800" border="2" bgcolor="pink">


   <tr align="center">
		<td colspan="8"><h2>City Info</h2></td>
	</tr>
	<tr>
		<td align="right"><b>City Name:</b></td>
		<td align="left"><input type="text" name="city_name" required/></td>
	</tr>
	<tr>
		<td align="right"><b>State:</b></td>
		<td align="left"><input type="text" name="state" required/></td>
	</tr>
	<tr align="center">
	<td colspan="8"><input type="submit" name="insert_city" value="Insert_City" /></td>
	</tr>

</table>
</form>
</body>

</html>
<?php

 if(isset($_POST['insert_city']))
 {
	   $con = mysqli_connect("localhost","root","","test");
	   $name = $_POST['city_name'];
	   $state= $_POST['state'];
	   $insert_query = "insert into city(cityname,state) values ('$name','$state')";
	   $log = mysqli_query($con,$insert_query);
	   
	   if($log)
	   {
		   
		   echo "<script>alert('city added  successful')</script>";
	   }
	   else
		   echo "insertion failed";
	   
	   



	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 }












?>