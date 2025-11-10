<?php
// Clean login page (no session writes here). Form posts to login_process.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MyPharma</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b1220;
            color: #fff;
        }

        .login-box {
            background: #111;
            padding: 30px;
            border-radius: 12px;
            width: 360px;
            margin: 60px auto;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 6px;
            border: 1px solid #333;
        }

        .btn {
            background: #00ffcc;
            color: #000;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .error {
            color: #ff8080;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login to MyPharma</h2>
        <?php if (!empty($_GET['error'])): ?>
            <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>
        <form id="loginForm" action="login_process.php" method="POST" onsubmit="return validateForm()">
            <label for="role">Role</label>
            <select name="role" id="role" required>
                <option value="">-- Select Role --</option>
                <option value="admin">Admin</option>
                <option value="pharmacist">Pharmacist</option>
                <option value="customer">Customer</option>
            </select>

            <input type="text" id="username" name="username" placeholder="Enter username" required>
            <div id="nameError" class="error"></div>

            <input type="password" id="password" name="password" placeholder="Enter password" required>
            <div id="passwordError" class="error"></div>

            <button type="submit" class="btn">Login</button>
        </form>
        <p style="margin-top:10px">Don't have an account? <a href="register.php">Register</a></p>
    </div>

<script>
function validateForm(){
    const name = document.getElementById('username').value.trim();
    const pwd = document.getElementById('password').value.trim();
    document.getElementById('nameError').textContent = '';
    document.getElementById('passwordError').textContent = '';
    if (name.length < 2) { document.getElementById('nameError').textContent = 'Enter a valid username'; return false; }
    if (pwd.length < 4) { document.getElementById('passwordError').textContent = 'Enter password (min 4 chars)'; return false; }
    return true;
}
</script>
</body>
</html>

