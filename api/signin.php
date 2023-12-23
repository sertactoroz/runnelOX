<?php
include('../functions.php');
include('../db.php');
// Include the file with Bcrypt functions
include('../bcrypt_functions.php');

$email = $_POST['email'];
$password = $_POST['password'];
$rememberme = $_POST['rememberme'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Use password_verify to check if the entered password matches the hashed password
    if (password_verify($password, $row["password"])) {
        $name = $row['fullName'];
        $email = $row['email'];
        $userid = $row['userGuid'];

        $data = array(
            "success" => true,
            "message" => "Welcome $name!",
            "name" => $name,
            "email" => $email,
            "userid" => $userid,
            "rememberme" => $rememberme
        );
    } else {
        $data = array(
            "success" => false,
            "message" => "Invalid username or password!"
        );
    }
} else {
    $data = array(
        "success" => false,
        "message" => "Invalid username or password!"
    );
}

$conn->close();

echo json_encode($data);
