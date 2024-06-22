<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="accountdetails";

$fullname="fullname";
$Reenter_password="Reenter_password";
$email_address="email_address";
$UserID="UserID";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 