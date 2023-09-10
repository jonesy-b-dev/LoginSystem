<?php
require_once("db_connection.php");

$conn = connectToDatabase();

if(isset($_POST['uName']) && !empty($_POST['uName']) && isset($_POST['uPass']) && !empty($_POST['uPass'])) {
    echo "Fields are filled in! \n";
    SaveLoginDetails();
    Login($conn);
}

function SaveLoginDetails() {
    global $userName, $passWord;
    $userName = $_POST['uName'];
    $passWord = $_POST['uPass'];
}

function Login($conn) {
    global $userName, $passWord;
    $sql = "SELECT * FROM users WHERE user_name = '$userName' AND password = '$passWord'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo ("Login successful \n");
    }
    else {
        echo "Login failed \n";
    }
}
?>