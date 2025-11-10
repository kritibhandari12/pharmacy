<?php
session_start();
require_once __DIR__ . '/db.php';

if (!isset($_SESSION['user_id'], $_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php?error=Access+denied');
    exit;
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id <= 0) {
    header('Location: manage_medicine.php');
    exit;
}

$message = '';

// Fetch record
if ($stmt = $mysqli->prepare("SELECT id, name, description, manufacturer, price, quantity_in_stock FROM medicines WHERE id = ? LIMIT 1")) {
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $medicine = $res->fetch_assoc();
    $stmt->close();
} else {
    exit('Prepare failed.');
}

if (!$medicine) {
    header('Location: manage_medicine.php?error=Not+found');
    exit;
}

// Handle update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $manufacturer = trim($_POST['manufacturer'] ?? '');
    $price = isset($_POST['price']) ? (float)$_POST['price'] : 0.0;
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;

    if ($name === '' || $price < 0 || $quantity < 0) {
        $message = 'Invalid input: name required, price/quantity must be non-negative.';
    } else {
        $up = $mysqli->prepare("UPDATE medicines SET name = ?, description = ?, manufacturer = ?, price = ?, quantity_in_stock = ? WHERE id = ? LIMIT 1");
        if ($up) {
            $up->bind_param('sssdii', $name, $description, $manufacturer, $price, $quantity, $id);
            if ($up->execute()) {
                $up->close();
                header('Location: manage_medicine.php?success=updated');
                exit;
            }
            $message = 'Update failed.';
            $up->close();
        } else {
            $message = 'Prepare failed for update.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Medicine</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;background:#0f1720;color:#fff;padding:18px}
        .box{background:#111;padding:16px;border-radius:8px;max-width:720px;margin:12px auto}
        input,textarea{width:100%;padding:8px;margin:6px 0;border-radius:6px;border:1px solid #333;background:#0b1220;color:#fff}
        button{padding:8px 12px;border-radius:6px;background:#00ffcc;color:#000;border:none;cursor:pointer}
        .msg{color:#ffb86b}
    </style>
</head>
<body>
    <div class="box">
        <h1>Edit Medicine</h1>
        <p><a href="manage_medicine.php">← Back to list</a></p>
        <?php if ($message): ?><p class="msg"><?php echo htmlspecialchars($message); ?></p><?php endif; ?>
        <form method="post">
            <label>Name<br>
                <input name="name" required value="<?php echo htmlspecialchars($medicine['name']); ?>">
            </label>
            <label>Description<br>
                <textarea name="description" rows="4"><?php echo htmlspecialchars($medicine['description']); ?></textarea>
            </label>
            <label>Manufacturer<br>
                <input name="manufacturer" value="<?php echo htmlspecialchars($medicine['manufacturer']); ?>">
            </label>
            <label>Price<br>
                <input name="price" type="number" step="0.01" min="0" required value="<?php echo number_format((float)$medicine['price'],2,'.',''); ?>">
            </label>
            <label>Quantity in stock<br>
                <input name="quantity" type="number" min="0" required value="<?php echo (int)$medicine['quantity_in_stock']; ?>">
            </label>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>