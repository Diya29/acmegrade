<?php
session_start();

if (!isset($_SESSION['vendor_id'])) {
    header("Location: alogin.php");
    exit();
}

// Define your database connection parameters
$host = "localhost";  // Change to your MySQL host
$username = "your_username";  // Change to your MySQL username
$password = "your_password";  // Change to your MySQL password
$database = "your_database";  // Change to your MySQL database name

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$conn->close(); 
?>
