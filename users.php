
<?php
session_start();
require_once __DIR__ . '/db.php';
if (!isset($_SESSION['user_id'], $_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php?error=Access+denied');
    exit;
}

$msg = '';
// change role
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'], $_POST['role'])) {
    $uid = (int)$_POST['user_id'];
    $role = in_array($_POST['role'], ['admin','pharmacist','customer']) ? $_POST['role'] : 'customer';
    $u = $mysqli->prepare("UPDATE users SET role = ? WHERE id = ? LIMIT 1");
    $u->bind_param('si', $role, $uid);
    if ($u->execute()) $msg = 'Role updated.';
    $u->close();
}

// delete
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $d = $mysqli->prepare("DELETE FROM users WHERE id = ? LIMIT 1");
    $d->bind_param('i', $id);
    if ($d->execute()) $msg = 'User deleted.';
    $d->close();
}

// list users
$res = $mysqli->query("SELECT id, username, email, role, created_at FROM users ORDER BY created_at DESC");
$users = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Users</title></head>
<body>
    <h1>Users</h1>
    <p><a href="admin_database.php">← Dashboard</a></p>
    <?php if ($msg) echo '<p>'.htmlspecialchars($msg).'</p>'; ?>
    <table border="1" cellpadding="6">
        <tr><th>ID</th><th>Username</th><th>Email</th><th>Role</th><th>Since</th><th>Actions</th></tr>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?php echo (int)$u['id']; ?></td>
                <td><?php echo htmlspecialchars($u['username']); ?></td>
                <td><?php echo htmlspecialchars($u['email']); ?></td>
                <td><?php echo htmlspecialchars($u['role']); ?></td>
                <td><?php echo htmlspecialchars($u['created_at']); ?></td>
                <td>
                    <form method="post" style="display:inline">
                        <input type="hidden" name="user_id" value="<?php echo (int)$u['id']; ?>">
                        <select name="role">
                            <?php foreach (['admin','pharmacist','customer'] as $r): ?>
                                <option value="<?php echo $r; ?>" <?php if ($u['role']===$r) echo 'selected'; ?>><?php echo ucfirst($r); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit">Change</button>
                    </form>
                    |
                    <a href="users.php?action=delete&id=<?php echo (int)$u['id']; ?>" onclick="return confirm('Delete user?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>