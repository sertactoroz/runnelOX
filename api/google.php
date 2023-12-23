
<?php
require 'vendor/autoload.php'; // Include the Google API Client Library

$client = new Google_Client(['client_id' => '374376529924-18lmebbp7gig99icthjqakcevv0rhtj8.apps.googleusercontent.com']);
$payload = $client->verifyIdToken($_POST['AIzaSyAhvUtqh8hOBb1hxvCsfDMcrlcqoh1lfEA']);

if ($payload) {
    // Valid token, you can use $payload to get user information
    $user_id = $payload['sub'];
    $user_email = $payload['email'];

    // Add your custom logic here, e.g., save user data to the database

    echo json_encode(['success' => true, 'message' => 'Login successful']);
} else {
    // Invalid token
    echo json_encode(['success' => false, 'message' => 'Login failed']);
}
?>