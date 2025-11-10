<?php
require_once __DIR__ . '/db.php';

// === Edit these values before running ===
$username = 'admin';
$email = 'admin@example.com';
$password = 'Admin@123'; // change to a strong password immediately
$role = 'admin';
// =======================================

if (empty($username) || empty($email) || empty($password)) {
    exit("Fill username, email and password in the script.\n");
}

// check duplicate
$stmt = $mysqli->prepare("SELECT id FROM users WHERE username = ? OR email = ? LIMIT 1");
$stmt->bind_param('ss', $username, $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    echo "User with that username or email already exists.\n";
    $stmt->close();
    exit;
}
$stmt->close();

// insert with secure hash
$hash = password_hash($password, PASSWORD_DEFAULT);
$stmt = $mysqli->prepare("INSERT INTO users (username, email, password_hash, role, created_at) VALUES (?, ?, ?, ?, NOW())");
$stmt->bind_param('ssss', $username, $email, $hash, $role);
if ($stmt->execute()) {
    echo "Admin account created: username='{$username}', email='{$email}'. Delete this file now.\n";
} else {
    echo "Insert failed: " . $mysqli->error . "\n";
}
$stmt->close();
$mysqli->close();
?>