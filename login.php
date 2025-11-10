<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MyPharma</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, rgba(0, 198, 255, 0.8), rgba(0, 114, 255, 0.8)),
                        url('pharmacy-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            color: #fff;
        }

        /* Navbar */
        header {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #00ffcc;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #00ffcc;
        }

        /* Login Box */
        .login-box {
            background: rgba(0, 0, 0, 0.7);
            width: 400px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin: 80px auto;
        }

        .login-box h2 {
            color: #00ffcc;
            margin-bottom: 25px;
        }

        .login-box select,
        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
        }

        select {
            background-color: #fff;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .btn {
            background-color: #00ffcc;
            color: #000;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #00bfa6;
        }

        .links {
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .links a {
            color: #00ffcc;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            font-size: 0.9rem;
        }

        @media (max-width: 480px) {
            .login-box {
                width: 90%;
                padding: 30px;
                margin-top: 100px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">💊 MyPharma</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="medicine.php">Medicine</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php" style="color: #00ffcc;">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="login-box">
        <h2>Login to MyPharma</h2>
        <form action="login_process.php" method="POST">
            <label for="role">Select Role</label>
            <select name="role" id="role" required>
                <option value="">-- Select Role --</option>
                <option value="pharmacist">Pharmacist</option>
                <option value="customer">Customer</option>
            </select>

            <input type="text" name="username" placeholder="Enter Name" required>
            <input type="password" name="password" placeholder="Enter Password" required>

            <button type="submit" class="btn">Login</button>
        </form>

        <div class="links">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
            <p><a href="index.php">← Back to Home</a></p>
        </div>
    </div>

    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

</body>
</html> -->



<!-- 
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MyPharma</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, rgba(0, 198, 255, 0.8), rgba(0, 114, 255, 0.8)),
                        url('pharmacy-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            color: #fff;
        }

        header {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #00ffcc;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #00ffcc;
        }

        .login-box {
            background: rgba(0, 0, 0, 0.7);
            width: 400px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin: 80px auto;
        }

        .login-box h2 {
            color: #00ffcc;
            margin-bottom: 25px;
        }

        .login-box select,
        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
        }

        select {
            background-color: #fff;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .btn {
            background-color: #00ffcc;
            color: #000;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #00bfa6;
        }

        .links {
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .links a {
            color: #00ffcc;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            font-size: 0.9rem;
        }

        .error-message {
            color: #ff8080;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        @media (max-width: 480px) {
            .login-box {
                width: 90%;
                padding: 30px;
                margin-top: 100px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">💊 MyPharma</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="medicine.php">Medicine</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php" style="color: #00ffcc;">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="login-box">
        <h2>Login to MyPharma</h2>

        <form id="loginForm" action="login_process.php" method="POST" onsubmit="return validateForm()">
            <label for="role">Select Role</label>
            <select name="role" id="role" required>
                <option value="">-- Select Role --</option>
                <option value="pharmacist">Pharmacist</option>
                <option value="customer">Customer</option>
            </select>

            <input type="text" id="username" name="username" placeholder="Enter Name" required>
            <div id="nameError" class="error-message"></div>

            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            <div id="passwordError" class="error-message"></div>

            <button type="submit" class="btn">Login</button>
        </form>

        <div class="links">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
            <p><a href="index.php">← Back to Home</a></p>
        </div>
    </div>

    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

    <script>
        function validateForm() {
            const nameField = document.getElementById("username");
            const passwordField = document.getElementById("password");
            const nameError = document.getElementById("nameError");
            const passwordError = document.getElementById("passwordError");

            let valid = true;

            // Reset previous errors
            nameError.textContent = "";
            passwordError.textContent = "";

            // Validate name (letters only)
            const nameRegex = /^[A-Za-z]+$/;
            if (!nameRegex.test(nameField.value.trim())) {
                nameError.textContent = "Name must contain only letters (A–Z or a–z).";
                valid = false;
            }

            // Validate password (numbers only)
            const passwordRegex = /^[0-9]+$/;
            if (!passwordRegex.test(passwordField.value.trim())) {
                passwordError.textContent = "Password must contain only digits (0–9).";
                valid = false;
            }

            return valid;
        }
    </script>

</body>
</html> -->


$_SESSION['username'] = $username;
$_SESSION['role'] = $role;
Where to place it

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MyPharma</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #0c0f0fff, rgba(0, 114, 255, 0.8)),
                        url('pharmacy-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            color: #fff;
        }

        header {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #00ffcc;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #00ffcc;
        }

        .login-box {
            background: rgba(0, 0, 0, 0.7);
            width: 400px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin: 80px auto;
        }

        .login-box h2 {
            color: #00ffcc;
            margin-bottom: 25px;
        }

        .login-box select,
        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
        }

        select {
            background-color: #fff;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .btn {
            background-color: #00ffcc;
            color: #000;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #00bfa6;
        }

        .links {
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .links a {
            color: #00ffcc;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            font-size: 0.9rem;
        }

        .error-message {
            color: #ff8080;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        @media (max-width: 480px) {
            .login-box {
                width: 90%;
                padding: 30px;
                margin-top: 100px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">💊 MyPharma</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="medicine.php">Medicine</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php" style="color: #00ffcc;">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="login-box">
        <h2>Login to MyPharma</h2>

        <form id="loginForm" action="login_process.php" method="POST" onsubmit="return validateForm()">
            <label for="role">Select Role</label>
            <select name="role" id="role" required>
                <option value="">-- Select Role --</option>
                <option value="admin">Admin</option>
                <option value="patient">Patient</option>
            </select>

            <input type="text" id="username" name="username" placeholder="Enter Name" required>
            <div id="nameError" class="error-message"></div>

            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            <div id="passwordError" class="error-message"></div>

            <button type="submit" class="btn">Login</button>
        </form>

        <div class="links">
            <p>Don’t have an account? <a href="register.php">Register here</a></p>
            <p><a href="index.php">← Back to Home</a></p>
        </div>
    </div>

    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

  <script>    
function validateForm() {    
    const nameField = document.getElementById("username");    
    const passwordField = document.getElementById("password");    
    const nameError = document.getElementById("nameError");    
    const passwordError = document.getElementById("passwordError");    
    
    let valid = true;      
    nameError.textContent = "";      
    passwordError.textContent = "";      
    
    // ✅ Name validation: only alphabets (A–Z or a–z) and spaces allowed    
    const nameRegex = /^[A-Za-z\s]+$/;      
    if (!nameRegex.test(nameField.value.trim())) {      
        nameError.textContent = "Name must contain only letters (A–Z or a–z) and spaces.";      
        valid = false;      
    }      
    
    // ✅ Password validation: only digits (0–9), up to 8 digits (1–8 allowed)    
    const passwordRegex = /^[0-9]{1,8}$/;    
    if (!passwordRegex.test(passwordField.value.trim())) {      
        passwordError.textContent = "Password must contain only digits (0–9) and be up to 8 digits long.";      
        valid = false;      
    }      
    
    return valid;      
}    
</script>


</body>
</html>

