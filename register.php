<?php
// Simple register form
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Register | MyPharma</title>
<style>
    body{font-family:Arial,Helvetica,sans-serif;background:#0b1220;color:#fff}
    .box{background:#111;padding:24px;border-radius:10px;width:420px;margin:40px auto}
    input,select{width:100%;padding:10px;margin:8px 0;border-radius:6px;border:1px solid #333}
    .btn{background:#00ffcc;color:#000;padding:10px;border:none;border-radius:8px;cursor:pointer}
    .error{color:#ff8080}
</style>
</head>
<body>
<div class="box">
    <h2>Create account</h2>
    <?php if (!empty($_GET['error'])): ?>
        <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>
    <form id="registerForm" action="register_process.php" method="POST" onsubmit="return validateReg()">

    <input type="text" name="username" id="username" placeholder="Username" required>
    <input type="email" name="email" id="email" placeholder="Email" required>
    <input type="password" name="password" id="password" placeholder="Password (min 6)" required>
    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" required>
    <label>Role</label>
    <select name="role" required>
        <option value="customer">Customer</option>
        <option value="pharmacist">Pharmacist</option>
    </select>
    <button class="btn" type="submit">Register</button>
</form>
    <p style="margin-top:8px">Already registered? <a href="login.php">Login</a></p>
</div>

<script>
function validateReg(){
    const u = document.getElementById('username').value.trim();
    const e = document.getElementById('email').value.trim();
    const p = document.getElementById('password').value;
    const c = document.getElementById('confirm_password').value;
    if (u.length < 2) { alert('Enter a valid username'); return false; }
    if (!e.includes('@')) { alert('Enter a valid email'); return false; }
    if (p.length < 6) { alert('Password min 6 chars'); return false; }
    if (p !== c) { alert('Passwords do not match'); return false; }
    return true;
}
</script>
</body>
</html>