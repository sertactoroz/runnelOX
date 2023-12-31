<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database Config
include('../db.php');

// Include the file with Bcrypt functions
include('../bcrypt_functions.php');

// Get POST data from the frontend
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (strlen($password) < 8) {
    $data = array(
        "success" => false,
        "message" => "Password must be at least 8 characters"
    );
} else {
    // Perform SQL query to check if the email already exists
    $checkEmailQuery = "SELECT * FROM users WHERE email='$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);

    if ($checkEmailResult->num_rows > 0) {
        $data = array(
            "success" => false,
            "message" => "Email already in use"
        );
    } else {
        // Generate a hash of the password
        $hashedPassword = generateHash($password);
        $insertQuery = "INSERT INTO users (userGuid, fullName, email, password) VALUES (uuid(), '$fullname','$email', '$hashedPassword')";

        if ($conn->query($insertQuery) === TRUE) {
            // Retrieve userGuid for the inserted user
            $last_id = mysqli_insert_id($conn);
            $getUserGuidQuery = "SELECT userGuid FROM users WHERE userId = $last_id";
            $getUserGuidResult = $conn->query($getUserGuidQuery);

            if ($getUserGuidResult->num_rows > 0) {
                $row = $getUserGuidResult->fetch_assoc();
                $userGuid = $row['userGuid'];

                $data = array(
                    "success" => true,
                    "message" => "Sign up succeed",
                    "userGuid" => $userGuid
                );

                // Start a session
                session_start();
                $_SESSION['full_name'] = $fullname;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_id'] = $last_id;
            } else {
                $data = array(
                    "success" => false,
                    "message" => "Error retrieving userGuid"
                );
            }
        } else {
            $data = array(
                "success" => false,
                "message" => "Error: " . $insertQuery . "<br>" . $conn->error
            );
        }
    }
}

$conn->close();

echo json_encode($data);
