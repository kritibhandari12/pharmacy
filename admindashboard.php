<?php
session_start();

// Include database connection
include('login.php');

// Check if user is logged in and role is admin or pharmacist
if (!isset($_SESSION['username']) || !in_array($_SESSION['role'], ['admin', 'pharmacist'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($role); ?> Dashboard | MyPharma</title>
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; }
        body { background:#f4f8fb; color:#333; }
        header { background:#0072ff; color:white; padding:15px 40px; display:flex; justify-content:space-between; align-items:center; }
        header a { color:white; text-decoration:none; background:#ff4444; padding:8px 15px; border-radius:5px; }
        .dashboard { padding:40px; }
        .welcome { margin-bottom:30px; font-size:1.2rem; }
        .cards { display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:25px; }
        .card { background:white; border-radius:12px; box-shadow:0 4px 8px rgba(0,0,0,0.1); padding:25px; text-align:center; transition:0.3s; }
        .card:hover { transform:translateY(-5px); }
        .card h3 { color:#0072ff; margin-bottom:10px; }
        .card p { color:#666; font-size:0.9rem; }
        .card a { display:inline-block; margin-top:15px; text-decoration:none; color:white; background:#0072ff; padding:8px 15px; border-radius:5px; transition:0.3s; }
        .card a:hover { background:#005fcc; }
        footer { text-align:center; padding:10px; background:#0072ff; color:white; position:fixed; bottom:0; width:100%; }
    </style>
</head>
<body>

<header>
    <h1>💊 MyPharma Dashboard</h1>
    <div>
        Welcome, <strong><?php echo htmlspecialchars($username); ?></strong> (<?php echo ucfirst($role); ?>)
        | <a href="logout.php">Logout</a>
    </div>
</header>

<div class="dashboard">
    <div class="welcome">
        <h2>Dashboard Overview</h2>
        <p>Manage your pharmacy operations efficiently.</p>
    </div>

    <div class="cards">
        <div class="card">
            <h3>🧾 Manage Medicines</h3>
            <p>Add, edit, or delete medicines from the pharmacy stock.</p>
            <a href="medicine_manage.php">Go</a>
        </div>

        <div class="card">
            <h3>🛒 Orders</h3>
            <p>View and manage customer orders.</p>
            <a href="orders.php">Go</a>
        </div>

        <div class="card">
            <h3>👨‍⚕ Customers</h3>
            <p>View customer details and purchase history.</p>
            <a href="customers.php">Go</a>
        </div>

        <div class="card">
            <h3>📊 Reports</h3>
            <p>View sales reports and analytics.</p>
            <a href="reports.php">Go</a>
        </div>
    </div>
</div>

<footer>
    © 2025 MyPharma | Pharmacy Management System
</footer>

</body>
</html>