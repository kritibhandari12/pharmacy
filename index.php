<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: url('pharmacy-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            color: #fff;
        }

        /* Navbar */
        header {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 40px;
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
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #00ffcc;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            margin-top: 150px;
            background: rgba(0, 0, 0, 0.5);
            display: inline-block;
            padding: 40px 60px;
            border-radius: 15px;
        }

        .hero h1 {
            font-size: 3rem;
            color: #00ffcc;
        }

        .hero p {
            margin: 15px 0 25px;
            font-size: 1.2rem;
        }

        .btn {
            background-color: #00ffcc;
            color: black;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #00bfa6;
        }

        /* Footer */
        footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .hero {
                margin-top: 100px;
                padding: 30px;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
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

    <div class="hero">
        <h1>Welcome to MyPharma</h1>
        <p>Your trusted online pharmacy management system — fast, reliable, and secure.</p>
        <a href="medicine.php"><button class="btn">View Medicines</button></a>
    </div>
      
    <img src="pharmacy.jpg" alt="pharmacy Image">
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
    <title>Pharmacy Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #0c0f0fff, #0072ff);
            color: #fff;
            overflow-x: hidden;
        }

        /* Navbar */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background: rgba(0, 0, 0, 0.6);
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

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 80px 10%;
        }

        .hero-text {
            max-width: 50%;
        }

        .hero-text h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #00ffcc;
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn {
            background-color: #00ffcc;
            color: #000;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #00ffcc;
        }

        /* Pharmacy Image */
        .hero img {
            width: 450px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
        }

        /* Footer */
        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
            font-size: 0.9rem;
        }

        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-text {
                max-width: 90%;
                margin-bottom: 30px;
            }

            .hero img {
                width: 90%;
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

    <section class="hero">
        <div class="hero-text">
            <h1>Welcome to MyPharma</h1>
            <p>
                Your trusted online pharmacy management system — simplifying access to medicines, 
                healthcare services, and patient records. 
                Manage your pharmacy efficiently and securely.
            </p>
            <a href="medicine.php"><button class="btn">Explore Medicines</button></a>
        </div>
        <img src="pharmacy.jpg" alt="Pharmacy Image">
    </section>

    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

</body>
</html>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: url('pharmacy-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            color: #fff;
        }

        /* Navbar */
        header {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 40px;
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
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #00ffcc;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            margin-top: 150px;
            background: rgba(0, 0, 0, 0.5);
            display: inline-block;
            padding: 40px 60px;
            border-radius: 15px;
        }

        .hero h1 {
            font-size: 3rem;
            color: #00ffcc;
        }

        .hero p {
            margin: 15px 0 25px;
            font-size: 1.2rem;
        }

        .btn {
            background-color: #00ffcc;
            color: black;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #00bfa6;
        }

        /* Footer */
        footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .hero {
                margin-top: 100px;
                padding: 30px;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
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

    <div class="hero">
        <h1>Welcome to MyPharma</h1>
        <p>Your trusted online pharmacy management system — fast, reliable, and secure.</p>
        <a href="medicine.php"><button class="btn">View Medicines</button></a>
    </div>
      
    <img src="pharmacy.jpg" alt="pharmacy Image">
    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

</body>
</html>
 -->


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacy Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      color: #333;
      margin: 0;
      text-align: center;
    }

    header {
      background: #009688;
      padding: 15px 0;
    }

    .logo {
      color: #fff;
      font-size: 1.8rem;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 10px 0 0;
    }

    nav ul li {
      display: inline;
      margin: 0 15px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    nav ul li a:hover {
      text-decoration: underline;
    }

    .hero {
      margin: 60px auto;
      width: 80%;
    }

    .hero h1 {
      color: #009688;
    }

    .hero p {
      margin: 20px 0;
    }

    .btn {
      background: #009688;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background: #00796b;
    }

    footer {
      background: #009688;
      color: #fff;
      padding: 10px;
      margin-top: 50px;
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
        <li><a href="about.php">About</a></li>
        <li><a href="medicine.php">Medicine</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h1>Welcome to MyPharma</h1>
    <p>Your trusted online pharmacy management system — easy, secure, and reliable.</p>
    <a href="medicine.php"><button class="btn">Explore Medicines</button></a>
  </section>

  <footer>
    © 2025 MyPharma | Pharmacy Management System
  </footer>

</body>
</html> -->




<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacy Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      text-align: center;
      background: #f4f4f4;
      color: #333;
    }

    header {
      background: #009688;
      padding: 15px 0;
    }

    .logo {
      color: #fff;
      font-size: 1.8rem;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 10px 0 0;
    }

    nav ul li {
      display: inline;
      margin: 0 15px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    nav ul li a:hover {
      text-decoration: underline;
    }

    .hero {
      display: flex;
      align-items: center;
      justify-content: space-around;
      margin: 60px auto;
      width: 90%;
      flex-wrap: wrap;
    }

    .hero-text {
      max-width: 45%;
      text-align: left;
    }

    .hero-text h1 {
      color: #009688;
      margin-bottom: 20px;
    }

    .hero-text p {
      margin-bottom: 20px;
      font-size: 1.1rem;
    }

    .btn {
      background: #009688;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background: #00796b;
    }

    .hero img {
      max-width: 45%;
      height: auto;
      border-radius: 10px;
    }

    footer {
      background: #009688;
      color: #fff;
      padding: 10px;
      margin-top: 50px;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        text-align: center;
      }

      .hero-text, .hero img {
        max-width: 90%;
      }

      .hero-text {
        margin-bottom: 20px;
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
        <li><a href="about.php">About</a></li>
        <li><a href="medicine.php">Medicine</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Welcome to MyPharma</h1>
      <p>Your trusted online pharmacy management system — easy, secure, and reliable.</p>
      <a href="medicine.php"><button class="btn">Explore Medicines</button></a>
    </div>
    <img src="pharmacy.jpg" alt="Pharmacy Image">
  </section>

  <footer>
    © 2025 MyPharma | Pharmacy Management System
  </footer>
</body>
</html>

 -->
