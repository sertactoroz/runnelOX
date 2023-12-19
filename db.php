<?php
$servername = "185.241.138.92";
$username = "ngi2024";
$password = "Fx7mz458%";
$dbname = "admin_arkzero";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// api encoding sorununu çözdü. türkçe karakterleri basabiliyoruz
$conn->set_charset("utf8");
