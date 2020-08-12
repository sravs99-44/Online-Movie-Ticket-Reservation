<html>
<head>
<title>Ticket page</title>
</head>
<body bgcolor="black">
<form action="ticket.php" method="post" enctype="multipart/form-data">
<table align="center" width="800" border="2" bgcolor="#ccff99">


   <tr align="center">
		<td colspan="8"><h2>Ticket Info</h2></td>
	</tr>
	<tr>
		<td align="right"><b>Show Id:</b></td>
		<td align="left"><input type="text" name="showid" required/></td>
	</tr>
	
	<tr>
		<td align="right"><b>seattype:</b></td>
		<td align="left"><input type="text" name="seattype" required/></td>
	</tr>
	<tr>
		<td align="right"><b>noofseats:</b></td>
		<td align="left"><input type="text" name="noofseats" required/></td>
	</tr>
	<tr>
		<td align="right"><b>amount:</b></td>
		<td align="left"><input type="text" name="amount" required/></td>
	</tr>
		<tr>
		<td align="right"><b>Paid Status:</b></td>
		<td align="left"><input type="text" name="ispaid" required/></td>
	</tr>
		<tr>
		<td align="right"><b>Mobile:</b></td>
		<td align="left"><input type="text" name="mobile" required/></td>
	</tr>
		<tr>
		<td align="right"><b>Email:</b></td>
		<td align="left"><input type="text" name="email" required/></td>
	</tr>
	<tr align="center">
	<td colspan="8"><input type="submit" name="insert_city" value="Book" /></td>
	</tr>

</table>
</form>
</body>

</html>
<?php

 if(isset($_POST['insert_city']))
 {
	   $con = mysqli_connect("localhost","root","","test");
	   $showid = $_POST['showid'];
	   
	   $seattype= $_POST['seattype'];
	   
	   $noofseats= $_POST['noofseats'];
	   $amount= $_POST['amount'];
	   $ispaid = $_POST['ispaid'];
	   $mobile= $_POST['mobile'];
	   $email =$_POST['email'];
	   $insert_query = "insert into ticket
	   (showid,seattype,noofseats,amount,ispaid,mobile,email) 
	   values ('$showid','$seattype','$noofseats','$amount','$ispaid','$mobile','$email')";
	   $log = mysqli_query($con,$insert_query);
	   
	   if($log)
	   {
		   
		   echo "<script>alert(' ticket updated  successful')</script>";
	   }
	   else
		   echo "updation failed";
	  	 
 }

?>