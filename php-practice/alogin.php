<!-- login.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate the user against the database
    $conn = new mysqli("localhost", "username", "password", "database");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id FROM vendors WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($vendor_id);
    
    if ($stmt->fetch()) {
        $_SESSION['vendor_id'] = $vendor_id;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Login failed. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>
