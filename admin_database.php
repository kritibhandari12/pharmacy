<?php
session_start();
require_once __DIR__ . '/db.php';

// allow only admins
if (!isset($_SESSION['user_id'], $_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php?error=Access+denied');
    exit;
}

$username = htmlspecialchars($_SESSION['username'] ?? 'admin', ENT_QUOTES, 'UTF-8');

// gather simple stats
$stats = [
    'medicines' => 0,
    'low_stock' => 0,
    'users' => 0,
    'orders' => 0,
];

$result = $mysqli->query("SELECT COUNT(*) AS c FROM medicines");
if ($result) { $stats['medicines'] = (int)$result->fetch_assoc()['c']; $result->free(); }

$result = $mysqli->query("SELECT COUNT(*) AS c FROM medicines WHERE quantity_in_stock <= 5");
if ($result) { $stats['low_stock'] = (int)$result->fetch_assoc()['c']; $result->free(); }

$result = $mysqli->query("SELECT COUNT(*) AS c FROM users");
if ($result) { $stats['users'] = (int)$result->fetch_assoc()['c']; $result->free(); }

$result = $mysqli->query("SELECT COUNT(*) AS c FROM orders");
if ($result) { $stats['orders'] = (int)$result->fetch_assoc()['c']; $result->free(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard | MyPharma</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body{font-family:Arial,Helvetica,sans-serif;background:#0b1220;color:#fff;padding:24px}
        .card{background:#111;padding:18px;border-radius:8px;margin:12px 0}
        a{color:#00ffcc;text-decoration:none}
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px}
        header{display:flex;justify-content:space-between;align-items:center;gap:12px}
        .small{font-size:0.9rem;color:#aaa}
    </style>
</head>
<body>
    <header>
        <h1>MyPharma — Admin Dashboard</h1>
        <div class="small">Welcome, <strong><?php echo $username; ?></strong> | <a href="logout.php">Logout</a></div>
    </header>

    <main>
        <section class="grid">
            <div class="card">
                <h3>Total medicines</h3>
                <p style="font-size:1.6rem"><?php echo $stats['medicines']; ?></p>
                <p><a href="manage_medicine.php">Manage medicines</a></p>
            </div>

            <div class="card">
                <h3>Low stock (&le;5)</h3>
                <p style="font-size:1.6rem"><?php echo $stats['low_stock']; ?></p>
                <p><a href="manage_medicine.php">Reorder</a></p>
            </div>

            <div class="card">
                <h3>Registered users</h3>
                <p style="font-size:1.6rem"><?php echo $stats['users']; ?></p>
                <p><a href="users.php">Manage users</a></p>
            </div>

            <div class="card">
                <h3>Orders</h3>
                <p style="font-size:1.6rem"><?php echo $stats['orders']; ?></p>
                <p><a href="orders.php">View orders</a></p>
            </div>
        </section>

        <section class="card" style="margin-top:18px">
            <h2>Quick actions</h2>
            <ul>
                <li><a href="add_medicine.php">Add new medicine</a></li>
                <li><a href="manage_medicine.php">Update stock / prices</a></li>
                <li><a href="orders.php">Process orders</a></li>
            </ul>
        </section>
    </main>
</body>
</html>