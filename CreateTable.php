<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "controlpage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  // sql to create table
  $sql= "CREATE TABLE if not exists motors( motor1 int(4)  ,
motor2 int(4),motor3 int(4),motor4 int(4),motor5 int(4),motor6 int(4))";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
