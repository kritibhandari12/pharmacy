<?php
<?php
session_start();
require_once __DIR__ . '/db.php';
if (!isset($_SESSION['user_id'], $_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php?error=Access+denied');
    exit;
}

$msg = '';
// handle delete
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $del = $mysqli->prepare("DELETE FROM medicines WHERE id = ? LIMIT 1");
    $del->bind_param('i', $id);
    if ($del->execute()) $msg = 'Deleted.';
    $del->close();
}

// fetch list
$res = $mysqli->query("SELECT id, name, manufacturer, price, quantity_in_stock FROM medicines ORDER BY name ASC");
$meds = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Manage Medicines</title></head>
<body>
    <h1>Manage Medicines</h1>
    <p><a href="admin_database.php">← Dashboard</a> | <a href="add_medicine.php">Add New</a></p>
    <?php if ($msg) echo '<p>'.htmlspecialchars($msg).'</p>'; ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr><th>ID</th><th>Name</th><th>Manufacturer</th><th>Price</th><th>Qty</th><th>Actions</th></tr>
        <?php foreach ($meds as $m): ?>
            <tr>
                <td><?php echo (int)$m['id']; ?></td>
                <td><?php echo htmlspecialchars($m['name']); ?></td>
                <td><?php echo htmlspecialchars($m['manufacturer']); ?></td>
                <td><?php echo number_format((float)$m['price'],2); ?></td>
                <td><?php echo (int)$m['quantity_in_stock']; ?></td>
                <td>
                    <a href="edit_medicine.php?id=<?php echo (int)$m['id']; ?>">Edit</a> |
                    <a href="manage_medicine.php?action=delete&id=<?php echo (int)$m['id']; ?>" onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>