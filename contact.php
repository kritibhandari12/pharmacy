<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | MyPharma</title>
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

        /* Contact Section */
        .contact-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 140px);
        }

        .contact-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px 50px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
            width: 450px;
        }

        .contact-box h2 {
            text-align: center;
            color: #00ffcc;
            margin-bottom: 25px;
        }

        .contact-box input,
        .contact-box textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 1rem;
        }

        input[type="text"], input[type="email"], textarea {
            background-color: rgba(255, 255, 255, 0.9);
        }

        textarea {
            resize: none;
            height: 100px;
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

        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            font-size: 0.9rem;
        }

        @media (max-width: 480px) {
            .contact-box {
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
                <li><a href="contact.php" style="color:#00ffcc;">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-section">
        <div class="contact-box">
            <h2>Contact Us</h2>
            <form action="contact_process.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" placeholder="Your Message..." required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us | MyPharma</title>
<style>
    * {margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif;}
    body {
        background: linear-gradient(to bottom right, #0c0f0fff, rgba(0,114,255,0.8)),
                    url('medical-bg.jpg') no-repeat center center/cover;
        min-height: 100vh; color: #fff;
    }
    header {
        background: rgba(0, 0, 0, 0.6);
        padding: 20px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo {font-size: 1.8rem; font-weight: bold; color: #00ffcc;}
    nav ul {list-style: none; display: flex;}
    nav ul li {margin-left: 25px;}
    nav ul li a {color: #fff; text-decoration: none; font-size: 1rem; transition: 0.3s;}
    nav ul li a:hover {color: #00ffcc;}
    .contact-section {display: flex; justify-content: center; align-items: center; min-height: calc(100vh - 140px);}
    .contact-box {
        background: rgba(0, 0, 0, 0.7);
        padding: 40px 50px;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
        width: 450px;
    }
    .contact-box h2 {text-align: center; color: #00ffcc; margin-bottom: 25px;}
    .contact-box input, .contact-box textarea {
        width: 100%; padding: 12px; margin: 10px 0; border: none;
        border-radius: 10px; outline: none; font-size: 1rem;
    }
    input[type="text"], input[type="email"], textarea {background-color: rgba(255, 255, 255, 0.9);}
    textarea {resize: none; height: 100px;}
    .btn {
        background-color: #00ffcc; color: #000; border: none;
        width: 100%; padding: 12px; border-radius: 25px;
        font-size: 1rem; cursor: pointer; transition: 0.3s; margin-top: 10px;
    }
    .btn:hover {background-color: #00bfa6;}
    .error-message {color: #ff8080; font-size: 0.9rem; margin-bottom: 5px;}
    footer {text-align: center; background: rgba(0, 0, 0, 0.6); padding: 10px; font-size: 0.9rem;}
    @media (max-width: 480px) {.contact-box {width: 90%; padding: 30px;}}
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
            <li><a href="contact.php" style="color:#00ffcc;">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</header>

<section class="contact-section">
    <div class="contact-box">
        <h2>Contact Us</h2>
        <form id="contactForm" onsubmit="return validateContactForm()" method="POST" action="contact_process.php">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <div id="nameError" class="error-message"></div>

            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <div id="emailError" class="error-message"></div>

            <input type="text" id="subject" name="subject" placeholder="Subject" required>
            <div id="subjectError" class="error-message"></div>

            <textarea id="message" name="message" placeholder="Your Message..." required></textarea>
            <div id="messageError" class="error-message"></div>

            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
</section>

<footer>
    © 2025 MyPharma | Designed for Pharmacy Management System Project
</footer>

<script>
function validateContactForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const subjectError = document.getElementById("subjectError");
    const messageError = document.getElementById("messageError");

    let isValid = true;

    // Reset previous errors
    nameError.textContent = "";
    emailError.textContent = "";
    subjectError.textContent = "";
    messageError.textContent = "";

    // Name validation: only letters and spaces
    const namePattern = /^[A-Za-z\s]+$/;
    if (name === "") {
        nameError.textContent = "Name is required";
        isValid = false;
    } else if (!namePattern.test(name)) {
        nameError.textContent = "Name must contain only letters and spaces";
        isValid = false;
    }

    // Email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        emailError.textContent = "Email is required";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        emailError.textContent = "Invalid email format";
        isValid = false;
    }

    // Subject validation
    if (subject === "" || subject.length <8) {
        subjectError.textContent = "Subject must be at least 8 characters";
        isValid = false;
    }

    // Message validation
    if (message === "" || message.length < 10) {
        messageError.textContent = "Message must be at least 10 characters";
        isValid = false;
    }

    return isValid;
}
</script>

</body>
</html>