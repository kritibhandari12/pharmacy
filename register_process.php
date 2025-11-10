<?php
session_start();
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit;
}

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';
$role = $_POST['role'] ?? 'customer';

if ($username === '' || $email === '' || $password === '' || $password !== $confirm) {
    header('Location: register.php?error=Invalid+input');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: register.php?error=Invalid+email');
    exit;
}

// Check duplicates
$checkSql = "SELECT id FROM users WHERE username = ? OR email = ? LIMIT 1";
if ($stmt = $mysqli->prepare($checkSql)) {
    $stmt->bind_param('ss', $username, $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->close();
        header('Location: register.php?error=User+already+exists');
        exit;
    }
    $stmt->close();
}

// Insert user
$hash = password_hash($password, PASSWORD_DEFAULT);
$insertSql = "INSERT INTO users (username, email, password_hash, role, created_at) VALUES (?, ?, ?, ?, NOW())";
if ($stmt = $mysqli->prepare($insertSql)) {
    $stmt->bind_param('ssss', $username, $email, $hash, $role);
    if ($stmt->execute()) {
        $stmt->close();
        header('Location: login.php?success=registered');
        exit;
    }
    $stmt->close();
}

header('Location: register.php?error=Registration+failed');
exit;
?>
