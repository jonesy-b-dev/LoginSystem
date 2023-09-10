<?php
require_once("db_connection.php");
$conn = connectToDatabase();

if(isset($_POST['uName']) && !empty($_POST['uName']) && isset($_POST['uPass']) && !empty($_POST['uPass'])) {
    echo "Fields are filled in! \n";
    SaveLoginDetails();
    Register($conn);
}

function SaveLoginDetails() {
    global $userName, $passWord;
    $userName = $_POST['uName'];
    $passWord = $_POST['uPass'];
}

function register($conn){
    global $userName, $passWord;
    $sql = "INSERT INTO users (user_name, password) VALUES ('$userName', '$passWord')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo ("Registration successful \n");
    }
    else {
        echo "Registration failed \n";
    }
}

?>