<?php
session_start();
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$role = $_POST['role'] ?? '';
$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($role === '' || $username === '' || $password === '') {
    header('Location: login.php?error=Missing+credentials');
    exit;
}

// Prepared statement to fetch user by username and role
$sql = "SELECT id, username, password_hash, role FROM users WHERE username = ? AND role = ? LIMIT 1";
if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param('ss', $username, $role);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if ($user && password_verify($password, $user['password_hash'])) {
        // Successful login
        session_regenerate_id(true);
        $_SESSION['user_id'] = (int)$user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on role
        if ($user['role'] === 'admin') {
            header('Location: admin_database.php');
        } elseif ($user['role'] === 'pharmacist') {
            header('Location: admin_database.php'); // adjust if you have a pharmacist dashboard
        } else {
            header('Location: index.php');
        }
        exit;
    }
}

// Failed login
header('Location: login.php?error=Invalid+credentials');
exit;
?>