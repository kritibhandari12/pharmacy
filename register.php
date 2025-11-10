<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | MyPharma</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #0c0f0fff, rgba(0,114,255,0.8)),
                        url('medical-bg.jpg') no-repeat center center/cover;
            min-height: 100vh;
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

        .register-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 140px);
        }

        .register-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px 50px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
            width: 400px;
        }

        .register-box h2 {
            text-align: center;
            color: #00ffcc;
            margin-bottom: 25px;
        }

        .register-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
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
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #00bfa6;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link a {
            color: #00ffcc;
            text-decoration: none;
        }

        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            font-size: 0.9rem;
        }

        @media (max-width: 480px) {
            .register-box {
                width: 90%;
                padding: 30px;
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
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="register-section">
        <div class="register-box">
            <h2>Create an Account</h2>
            <form action="register_process.php" method="POST">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="btn">Register</button>
            </form>

            <div class="login-link">
                Already have an account? <a href="login.php">Login here</a>
            </div>
        </div>
    </section>

    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

<script>
function validateForm() {
    // Get form values
    const name = document.getElementById("fullname").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    // Get error message elements
    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const passwordError = document.getElementById("passwordError");
    const successMsg = document.getElementById("successMsg");

    // Reset previous messages
    nameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";
    successMsg.textContent = "";

    let isValid = true;

    // ✅ Validate full name: only letters and spaces
    const namePattern = /^[A-Za-z ]+$/;
    if (name === "") {
        nameError.textContent = "Full name is required";
        isValid = false;
    } else if (!namePattern.test(name)) {
        nameError.textContent = "Only letters and spaces allowed";
        isValid = false;
    }

    // ✅ Validate email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        emailError.textContent = "Email is required";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        emailError.textContent = "Invalid email format";
        isValid = false;
    }

    // ✅ Validate password: only digits 0-9, up to 8 digits
    const passwordPattern = /^[0-9]{1,8}$/;
    if (password === "") {
        passwordError.textContent = "Password is required";
        isValid = false;
    } else if (!passwordPattern.test(password)) {
        passwordError.textContent = "Password must contain only digits (0-9) and up to 8 digits";
        isValid = false;
    }

    // Show success message if all valid
    if (isValid) {
        successMsg.textContent = "Validation successful!";
    }

    return false; // prevent actual form submission for demo
}
</script>   

</body>
</html> -->










<!-- <!DOCTYPE html>
<html>
<head>
    <title>Validation Example (JavaScript)</title>
    <style>
        form {
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>

<form id="myForm" onsubmit="return validateForm()">
    <h3>Form Validation (JS)</h3>

    <label>Full Name:</label>
    <input type="text" id="fullname" placeholder="Enter your full name">
    <span id="nameError" class="error"></span>

    <label>Email:</label>
    <input type="text" id="email" placeholder="Enter your email">
    <span id="emailError" class="error"></span>

    <input type="submit" value="Submit">
</form>

<p id="successMsg" class="success"></p>

<script>
function validateForm() {
    // Get form values
    const name = document.getElementById("fullname").value.trim();
    const email = document.getElementById("email").value.trim();

    // Get error message elements
    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const successMsg = document.getElementById("successMsg");

    // Reset previous messages
    nameError.textContent = "";
    emailError.textContent = "";
    successMsg.textContent = "";

    let isValid = true;

    // Validate full name
    const namePattern = /^[A-Za-z ]+$/;
    if (name === "") {
        nameError.textContent = "Full name is required";
        isValid = false;
    } else if (!namePattern.test(name)) {
        nameError.textContent = "Only letters and spaces allowed";
        isValid = false;
    }

    // Validate email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        emailError.textContent = "Email is required";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        emailError.textContent = "Invalid email format";
        isValid = false;
    }

    // Show success message if valid
    if (isValid) {
        successMsg.textContent = "Validation successful!";
    }

    return false; // prevent actual form submission for demo
}
</script>

</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | MyPharma</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #0c0f0fff, rgba(0,114,255,0.8)),
                        url('medical-bg.jpg') no-repeat center center/cover;
            min-height: 100vh;
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

        .register-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 140px);
        }

        .register-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px 50px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
            width: 400px;
        }

        .register-box h2 {
            text-align: center;
            color: #00ffcc;
            margin-bottom: 25px;
        }

        .register-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
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
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #00bfa6;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link a {
            color: #00ffcc;
            text-decoration: none;
        }

        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            font-size: 0.9rem;
        }

        /* Error & Success Messages */
        .error-message {
            color: #ff8080;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .success-message {
            color: #00ffcc;
            font-size: 0.9rem;
            margin-top: 10px;
            text-align: center;
        }

        @media (max-width: 480px) {
            .register-box {
                width: 90%;
                padding: 30px;
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
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</header>

<section class="register-section">
    <div class="register-box">
        <h2>Create an Account</h2>
        
            <form id="registerForm" action="register_process.php" method="POST" >

            <input type="text" id="fullname" name="name" placeholder="Full Name" required>
            <div id="nameError" class="error-message"></div>

            <input type="email" id="email" name="email" placeholder="Email Address" required>
            <div id="emailError" class="error-message"></div>

            <input type="password" id="password" name="password" placeholder="Password" required>
            <div id="passwordError" class="error-message"></div>

            <button type="submit" class="btn">Register</button>
            
            <div id="successMsg" class="success-message"></div>
        </form>

        <div class="login-link">
            Already have an account? <a href="login.php">Login here</a>
        </div>
    </div>
</section>

<footer>
    © 2025 MyPharma | Designed for Pharmacy Management System Project
</footer>

<script>
function validateForm() {
    // Get form values
    const name = document.getElementById("fullname").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    // Get error message elements
    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const passwordError = document.getElementById("passwordError");
    const successMsg = document.getElementById("successMsg");

    // Reset previous messages
    nameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";
    successMsg.textContent = "";

    let isValid = true;

    // Validate full name (letters and spaces only)
    const namePattern = /^[A-Za-z ]+$/;
    if (name === "") {
        nameError.textContent = "Full name is required";
        isValid = false;
    } else if (!namePattern.test(name)) {
        nameError.textContent = "Only letters and spaces allowed";
        isValid = false;
    }

    // Validate email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        emailError.textContent = "Email is required";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        emailError.textContent = "Invalid email format";
        isValid = false;
    }

    // Validate password (only digits 0-9, up to 8 digits)
    const passwordPattern = /^[0-9]{1,8}$/;
    if (password === "") {
        passwordError.textContent = "Password is required";
        isValid = false;
    } else if (!passwordPattern.test(password)) {
        passwordError.textContent = "Password must contain only digits (0-9) and up to 8 digits";
        isValid = false;
    }

    // Show success message if all valid
    if (isValid) {
        successMsg.textContent = "Validation successful!";
    }

    return false; // prevent actual form submission for demo
}
</script>

</body>
</html>