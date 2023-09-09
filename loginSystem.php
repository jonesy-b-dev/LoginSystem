<?php
function SaveLoginDetails() {
    global $userName, $passWord;
    $userName = $_POST['uName'];
    $passWord = $_POST['uPass'];
    //print out the username and password
}

function Login($conn) {
    //check if userName and passWord are in the database
    //if they are, print out "Login successful"
    //else print out "Login failed"
    global $userName, $passWord;
    $sql = "SELECT * FROM users WHERE user_name = '$userName' AND password = '$passWord'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Login successful \n";
    }
    else {
        echo "Login failed \n";
    }
  
}
?>
