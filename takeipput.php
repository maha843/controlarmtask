<?php
session_start();

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




if(isset($_POST['submit'])){
  
  #PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form  
$u1 = $_POST['vol'];
$u2 = $_POST['vol2'];
$u3 = $_POST['vol3'];
$u4 = $_POST['vol4'];
$u5= $_POST['vol5'];
$u6= $_POST['vol6'];

//for inserting the info to database
$ins_query="insert into motors(motor1, motor2, motor3, motor4, motor5, motor6)
 values('$u1','$u2','$u3','$u4','$u5','$u6')";
    if ($conn->query($ins_query) === TRUE) {
  
      echo $u1." ".$u2." ".$u3." ".$u4." ".$u4." ".$u5." ".$u6;
    
} else {
  echo "Error: " . $ins_query . "<br>" . $conn->error;
}


  }
  

      
$conn->close();

?>

‏‏


