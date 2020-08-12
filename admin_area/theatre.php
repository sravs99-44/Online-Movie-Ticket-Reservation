<html>
<head>
<title>Theatre page</title>
</head>
<body bgcolor="black">
<form action="theatre.php" method="post" enctype="multipart/form-data">
<table align="center" width="800" border="2" bgcolor="#ccff99">


   <tr align="center">
		<td colspan="8"><h2>Theatre Info</h2></td>
	</tr>
	<tr>
		<td align="right"><b>Theatre Name:</b></td>
		<td align="left"><input type="text" name="theatrename" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Cityid:</b></td>
		<td align="left"><input type="text" name="cityid" required/></td>
	</tr>
	<tr>
		<td align="right"><b>address:</b></td>
		<td align="left"><input type="text" name="address" required/></td>
	</tr>
	<tr>
		<td align="right"><b>pincode:</b></td>
		<td align="left"><input type="text" name="pincode" required/></td>
	</tr>
	<tr>
		<td align="right"><b>No Of Screens:</b></td>
		<td align="left"><input type="text" name="noofscreens" required/></td>
	</tr>
	<tr align="center">
	<td colspan="8"><input type="submit" name="insert_city" value="Update" /></td>
	</tr>

</table>
</form>
</body>

</html>
<?php

 if(isset($_POST['insert_city']))
 {
	   $con = mysqli_connect("localhost","root","","test");
	   $theatrename = $_POST['theatrename'];
	   $cityid= $_POST['cityid'];
	   $address= $_POST['address'];
	   $pincode= $_POST['pincode'];
	   $noofscreens= $_POST['noofscreens'];
	   $insert_query = "insert into theatre
	   (theatrename,cityid,address,pincode,noofscreens) 
	   values ('$theatrename','$cityid','$address','$pincode','$noofscreens')";
	   $log = mysqli_query($con,$insert_query);
	   
	   if($log)
	   {
		   
		   echo "<script>alert('theatreadded  successful')</script>";
	   }
	   else
		   echo "insertion failed";
	  	 
 }

?>