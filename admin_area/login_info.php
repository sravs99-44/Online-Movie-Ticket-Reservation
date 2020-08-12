<html>
<head>
<title>Login page</title>
</head>
<body bgcolor="orange">
<form action="login_info.php" method="post" enctype="multipart/form-data">
<table align="center" width="800" border="2" bgcolor="lightblue">


   <tr align="center">
		<td colspan="8"><h2>Login Here</h2></td>
	</tr>
	<tr>
		<td align="right"><b>Username:</b></td>
		<td align="left"><input type="text" name="user_name" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Password:</b></td>
		<td align="left"><input type="password" name="password" required/></td>
	</tr>
	<tr align="center">
	<td colspan="8"><input type="submit" name="log_here" value="Login" /></td>
	</tr>

</table>
</form>
</body>

</html>
<?php

 if(isset($_POST['log_here']))
 {
	   $con = mysqli_connect("localhost","root","","test");
	    $user = $_POST['user_name'];
	    $pass = $_POST['password'];
	   $get_mo = "select username,password from customerinfo ";
       $run_mo = mysqli_query($con,$get_mo);
	   $log=0;
       while($row_mo=mysqli_fetch_array($run_mo)){
	       $user_name=$row_mo['username'];
	        $password=$row_mo['password'];
			
		   if( $user=$user_name and $pass==$password)
		   {
			    
				
				$log=1;
				break;
				
			   
	   }}
	   if($log){
	   echo "<a href='index.php'>Go to Home</a>";}
		   
			  else{
				  
				  echo "<p style='color:red'><marquee><b>invalied Login
				  Try again!!!if not registered sign up</b></marquee></p>";
				  echo "<a href='login_info.php'>Login again</a>";
				  echo "<a href='customerinfo.php'>sign up</a>";
				  
	            }
			   
		 
	   
 }


?>