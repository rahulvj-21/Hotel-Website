<?php
$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'register';
$name = $_POST['First_name'];
$last = $_POST['Last_name'];
$email = $_POST['Email'];
$contact = $_POST['Contact_no'];
$in = $_POST['Check_in'];
$out = $_POST['Check_out'];
$card = $_POST['Aadhaar_card_number'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}else echo"conn created";

echo"$name,$last,$email,$contact,$in,$out,$card";
/*
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

*/?>