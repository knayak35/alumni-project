<?php
include("connect.php");

if (isset($_POST['Register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $admin = $_POST['admin'];

    if ($admin == 'Admin') {

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->num_rows;
        if ($result->num_rows > 0) {
            echo "Login Success";
        } else {
            echo 'User not found';
        }
    } else {
        echo 'Login failed';
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
