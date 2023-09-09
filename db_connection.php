<?php
require 'loginSystem.php';
//Connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logintest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
  echo "Connected successfully \n";
}
else {
  echo "Connection failed. \n";
}

if(isset($_POST['uName']) && !empty($_POST['uName']) && isset($_POST['uPass']) && !empty($_POST['uPass'])) {
  echo "Fields are filled in! \n";
  SaveLoginDetails();
  Login($conn);
} 
else {
  echo "Failure! \n";
}
?>