<?php
<?php
session_start();
require_once __DIR__ . '/db.php';
if (!isset($_SESSION['user_id'], $_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php?error=Access+denied');
    exit;
}

$message = '';
// update status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'], $_POST['status'])) {
    $order_id = (int)$_POST['order_id'];
    $status = in_array($_POST['status'], ['pending','processing','completed','cancelled']) ? $_POST['status'] : 'pending';
    $u = $mysqli->prepare("UPDATE orders SET status = ? WHERE id = ? LIMIT 1");
    $u->bind_param('si', $status, $order_id);
    if ($u->execute()) $message = 'Status updated.';
    $u->close();
}

// fetch orders
$sql = "SELECT o.id,o.order_date,o.total_amount,o.status,u.username FROM orders o JOIN users u ON o.user_id = u.id ORDER BY o.order_date DESC";
$res = $mysqli->query($sql);
$orders = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Orders</title></head>
<body>
    <h1>Orders</h1>
    <p><a href="admin_database.php">← Dashboard</a></p>
    <?php if ($message) echo '<p>'.htmlspecialchars($message).'</p>'; ?>
    <table border="1" cellpadding="6">
        <tr><th>ID</th><th>User</th><th>Date</th><th>Total</th><th>Status</th><th>Action</th></tr>
        <?php foreach ($orders as $o): ?>
            <tr>
                <td><?php echo (int)$o['id']; ?></td>
                <td><?php echo htmlspecialchars($o['username']); ?></td>
                <td><?php echo htmlspecialchars($o['order_date']); ?></td>
                <td><?php echo number_format((float)$o['total_amount'],2); ?></td>
                <td><?php echo htmlspecialchars($o['status']); ?></td>
                <td>
                    <form method="post" style="margin:0">
                        <input type="hidden" name="order_id" value="<?php echo (int)$o['id']; ?>">
                        <select name="status">
                            <?php foreach (['pending','processing','completed','cancelled'] as $s): ?>
                                <option value="<?php echo $s; ?>" <?php if ($o['status']===$s) echo 'selected'; ?>><?php echo ucfirst($s); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>