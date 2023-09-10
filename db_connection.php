<?php
function connectToDatabase(){
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
  return $conn;
}
?>