
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database Config
// header('Access-Control-Allow-Origin: http://localhost', true);
include('../db.php');

// Get POST data from the frontend
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (strlen($password) < 8) {
    //  echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    $data = array(
        "success" => false,
        "message" => "Password must be at least 8 characters"
    );
} else {
    // echo "Your password is strong </br>";
    // Perform SQL query to check if the email already exists
    $checkEmailQuery = "SELECT * FROM users WHERE email='$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);

    if ($checkEmailResult->num_rows > 0) {
        $data = array(
            "success" => false,
            "message" => "email kullanımda"
        );
    } else {
        // Perform SQL query to insert data into the database for registration
        $insertQuery = "INSERT INTO users (userGuid, fullName, email, password) VALUES (uuid(), '$fullname','$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            //en son girdiğim kaydın ID'sini ver. 
            $last_id = mysqli_insert_id($conn);

            // Perform SQL query to retrieve userGuid for the inserted user
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

// Send a JSON response back to the frontend
// $response = array("message" => $data);
// echo json_encode($response);

echo json_encode($data);
