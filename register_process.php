<?php
// Database connection
$servername = "localhost";
$username = "root";   // default username in XAMPP
$password = "";       // default password (empty)
$dbname = "mypharma_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Get form data (sanitize to prevent SQL injection)
$fullname = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

// Hash password for security
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
