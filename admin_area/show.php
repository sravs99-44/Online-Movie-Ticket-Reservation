<html>
<head>
<title>Show wise Information page</title>
</head>
<body bgcolor="#e6b800">
<form action="show.php" method="post" enctype="multipart/form-data">
<table align="center" width="800" border="2" bgcolor="#ff5050">


   <tr align="center">
		<td colspan="8"><h2>Show Information</h2></td>
	</tr>
	<tr>
		<td align="right"><b>Movieid:</b></td>
		<td align="left"><input type="text" name="movieid" required/></td>
	</tr>
	
	<tr>
		<td align="right"><b>theaterid:</b></td>
		<td align="left"><input type="text" name="theatreid" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Screenid:</b></td>
		<td align="left"><input type="text" name="screenid" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Start Time:</b></td>
		<td align="left"><input type="text" name="starttime" required/></td>
	</tr>
	<tr>
		<td align="right"><b>End Time:</b></td>
		<td align="left"><input type="text" name="endtime" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Date:</b></td>
		<td align="left"><input type="text" name="date" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Class A cost:</b></td>
		<td align="left"><input type="text" name="classA" required/></td>
	</tr>
	<tr>
		<td align="right"><b>Class B cost:</b></td>
		<td align="left"><input type="text" name="classB" required/></td>
	</tr>
		<tr>
		<td align="right"><b>Class C cost:</b></td>
		<td align="left"><input type="text" name="classC" required/></td>
	</tr>
	
	<tr align="center">
	<td colspan="8"><input type="submit" name="update" value="Update" /></td>
	</tr>

</table>
</form>
</body>

</html>
<?php

 if(isset($_POST['update']))
 {
	   $con = mysqli_connect("localhost","root","","test");
	   $movieid = $_POST['movieid'];
	   $theatreid = $_POST['theatreid'];
	   $screenid = $_POST['screenid'];
	   $starttime = $_POST['starttime'];
	   
	   $endtime= $_POST['endtime'];
	   $date = $_POST['date'];
	   $classA = $_POST['classA'];
	   $classB = $_POST['classB'];
	   $classC = $_POST['classC'];
	   echo $insert_query = "insert into shows (movieid,theatreid,screenid,starttime,endtime,date,classA,classB,classC)
	    values ('$movieid','$theatreid','$screenid','$starttime','$endtime','$date','$classA','$classB','$classC')";
	   
	   $log = mysqli_query($con,$insert_query);
	   
	   if($log)
	   {
		   
		   echo "<script>alert('update successful')</script>";
	   }
	   else
		   echo "<script>alert('update failed')</script>";
	   
	   



	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 }












?>