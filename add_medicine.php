
<?php
session_start();
require_once __DIR__ . '/db.php';
if (!isset($_SESSION['user_id'], $_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php?error=Access+denied');
    exit;
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $desc = trim($_POST['description'] ?? '');
    $manu = trim($_POST['manufacturer'] ?? '');
    $price = floatval($_POST['price'] ?? 0);
    $qty = intval($_POST['quantity'] ?? 0);

    if ($name === '' || $price <= 0) {
        $message = 'Name and positive price required.';
    } else {
        $sql = "INSERT INTO medicines (name, description, manufacturer, price, quantity_in_stock, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param('sssdi', $name, $desc, $manu, $price, $qty);
            if ($stmt->execute()) {
                $message = 'Medicine added.';
            } else {
                $message = 'Insert failed.';
            }
            $stmt->close();
        } else {
            $message = 'Prepare failed.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Add Medicine</title></head>
<body>
    <h1>Add Medicine</h1>
    <p><a href="admin_database.php">← Dashboard</a></p>
    <?php if ($message) echo '<p>'.htmlspecialchars($message).'</p>'; ?>
    <form method="post">
        <label>Name<br><input name="name" required></label><br>
        <label>Description<br><textarea name="description"></textarea></label><br>
        <label>Manufacturer<br><input name="manufacturer"></label><br>
        <label>Price<br><input name="price" type="number" step="0.01" required></label><br>
        <label>Quantity<br><input name="quantity" type="number" value="0" required></label><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>