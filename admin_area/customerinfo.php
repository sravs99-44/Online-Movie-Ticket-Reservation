<html>


<?php  
   include('functions.php');
   include('db.php');
  ?>
<head>
<title>Customer Information page</title>
</head>
<body bgcolor="#ffcccc">
<form action="customerinfo.php" method="post" enctype="multipart/form-data">
<table align="center" width="800" border="2" bgcolor="MediumSeaGreen">


   <tr align="center">
		<td colspan="8"><h2>Customer Information</h2></td>
	</tr>
	<tr>
		<td align="right"><b>Name:</b></td>
		<td align="left"><input type="text" name="customer_name" required/></td>
	</tr>
	<tr>
		<td align="right"><b>City:</b></td>
		<td align="left"><input type="text" name="city" required/></td>
	</tr>
	<tr>
		<td align="right"><b>state:</b></td>
		<td align="left"><input type="text" name="state" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Email:</b></td>
		<td align="left"><input type="text" name="email" required/></td>
	</tr>
	<tr>
		<td align="right"><b>UserName:</b></td>
		<td align="left"><input type="text" name="username" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Password:</b></td>
		<td align="left"><input type="password" name="password" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Gender:</b></td>
		<td align="left"><input type="text" name="gender" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Address:</b></td>
		<td align="left"><input type="text" name="address" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Pincode:</b></td>
		<td align="left"><input type="text" name="pincode" required/></td>
	</tr>
	
	<tr align="center">
	<td colspan="8"><input type="submit" name="Register" value="Register" /></td>
	</tr>

</table>
</form>
</body>

</html>
<?php

 if(isset($_POST['Register']))
 {
	   $con = mysqli_connect("localhost","root","","test");
	   $name = $_POST['customer_name'];
	   $city = $_POST['city'];
	   $state = $_POST['state'];
	   $email = $_POST['email'];
	   
	   $user = $_POST['username'];
	   $pass = $_POST['password'];
	   $gender = $_POST['gender'];
	   $address = $_POST['address'];
	   $pincode = $_POST['pincode'];
	   $insert_query = "insert into customerinfo
	   (customer_name,city,state,email,username,password,gender,address,pincode)
	   values ('$name','$city','$state','$email','$user','$pass','$gender','$address','$pincode')";
	   
	   $log = mysqli_query($con,$insert_query);
	   
	   if($log)
	   {
		   
		   echo "<a href='index.php'>Go to Home</a>";
		   
	   }
	   else
		   echo "login failed";
	   
	   



	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 }












?>