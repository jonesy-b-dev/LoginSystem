<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logintest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
  echo "Connected successfully";
}
else {
  echo "Connection failed: ";
}

//check if the field with id uName and uPass is set and not empty, print out succes if true, else print out failure


if(isset($_POST['uName']) && !empty($_POST['uName']) && isset($_POST['uPass']) && !empty($_POST['uPass'])) {
  echo "Success!";
} 
else {
  echo "Failure!";
}
?>