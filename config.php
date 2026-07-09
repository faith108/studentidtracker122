<?php
$host = "localhost";
$user = "your_database_username";
$password = "your_database_password";
$database = "studentidtracker122";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
