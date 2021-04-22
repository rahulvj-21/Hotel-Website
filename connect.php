<?php
$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'register';
$name = $_POST['Full_name'];
$contact = $_POST['Contact'];
$email = $_POST['Email'];
$room = $_POST['Room_tariff'];
$stay = $_POST['Stay'];
$in = $_POST['Check_in'];
$out = $_POST['Check_out'];
$proof = $_POST['Choose_a_Id_Proof'];
$choose = $_POST['Id_number'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}else echo"";


$sql = "INSERT into hotel(Full_name,Contact,Email,Room_tariff,Stay,Check_in,Check_out,Choose_a_Id_Proof,Id_number) values('".$name."',".$contact.",'".$email."','".$room."',".$stay.",'".$in."','".$out."','".$proof."','".$choose."');";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Booking Details</h1></center>";
    echo "<center><h3>Name:-$name</h3></center>";
    echo "<center><h3>Contact:-$contact</h3></center>";
    echo "<center><h3>Email address:-$email</h3></center>";
    echo "<center><h3>Rent:-$room/day</h3></center>";
    echo "<center><h3>Stay:-$stay</h3></center>";
    echo "<center><h3>Chechin:-$in</h3></center>";
    echo "<center><h3>Checkout:-$out</h3></center></br>";
    $x;
    $x=$stay*$room;
    echo "<center><h2>Total payment:-$x</h2></center>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>