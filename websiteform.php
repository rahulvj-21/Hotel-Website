<?php
$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'register';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
$sql = "Select tariff,rent from roomrent";
$result=mysqli_query($conn,$sql);
$options="";
while($row=mysqli_fetch_array($result))
{
	$options=$options."<option>$row[0]...........$row[1]</option>";
}
 	
 
?>	

<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='rb.css'>
	<title></title>
</head>
<body bgcolor='#f7f1e3'>
	<div class="info0">

	<h1><center><u><b>BOOK YOUR SUITE</b></u></h1></center>
	<center><div class="info1">
    	<form method='post' action="connect.php">
		<div class='form'>
					
	Full_name:<input type='text'  name='Full_name' style='width:250px; height: 30px;' required="">
	Contact:&nbsp;<input type='text' name='Contact' style='width:250px; height: 30px;' required="">
	Email:&nbsp;<input type='email' name='Email'  style='width:250px; height: 30px;' required=""><br><BR>
		
		 
		Room_tariff:
		
		<select id='Room_tariff' name='Room_tariff' style='width:160px; height: 30px;'>
		<option value='5000'>Family suite</option>
		<option value='2500'>Mini suite</option>
		<option value='4000'>Deluxe room</option>
		<option value='3000'>Super Deluxe room</option>
		<option value='7000'>Murphy room</option>
		<option value='10000'>Honeymoon suite</option>	
		</select><br><br>	
		
		Stay:<br><input type='text' name='Stay' style='width:250px; height: 30px; ' required=""><br>
		<p id='demo'></p>
				Check_in:<input type='time' id='myTime' name='Check_in' style='width:250px; height: 30px; ' required="">
		Check_out: <input type='time' id='myTime' name='Check_out' style='width:250px; height: 30px; ' required=""> <br><BR><br>
		<label id='Id_Proof'>Choose_a_Id_Proof:</label> 
        <select id='Id_Proof' name='Choose_a_Id_Proof'>
		<option value='Driving license'>Driving license</option>
		<option value='Passport'>Passport</option>
		<option value='Pancard'>Pancard</option>
		<option value='Id card'>Id card</option>
		<option value='Aadhaar card'>Aadhaar card</option>
</select>
		Id_number<input type="text" name="Id_number" style='width=250px; height="30px;' required="">
<br><br>
		<input type='submit' value='submit'>
	</div>
	</center>
	</form>
	</div>
</div>
	</body>
</html> 