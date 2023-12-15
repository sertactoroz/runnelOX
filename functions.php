<?php
// DEVELOPMENT purposes - Session Variables
// echo '<pre>Session: ';
// var_dump($_SESSION);
// echo '</pre>';
// DEVELOPMENT purposes - Display All PHP Errors: 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
ob_start();
if (isset($_GET["p"])) {
    $pagename = $_GET["p"];
} else {
    $pagename = "home";
}
