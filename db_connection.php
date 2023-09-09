<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logintest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

echo "Hello World!";
// Check connection
if (!$conn) {
  echo "Connection failed: ";
}
echo "Connected successfully";
?>