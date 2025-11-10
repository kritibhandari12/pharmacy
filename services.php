<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | MyPharma</title>
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

        /* Services Section */
        .services-section {
            padding: 80px 10%;
            text-align: center;
        }

        .services-section h2 {
            color: #00ffcc;
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        .service-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .service-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
            transition: 0.3s;
        }

        .service-box:hover {
            transform: translateY(-10px);
            background: rgba(0, 0, 0, 0.8);
        }

        .service-box h3 {
            color: #00ffcc;
            margin-bottom: 15px;
        }

        .service-box p {
            font-size: 1rem;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            font-size: 0.9rem;
        }

        @media (max-width: 600px) {
            .services-section {
                padding: 60px 5%;
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
                <li><a href="services.php" style="color:#00ffcc;">Services</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="medicine.php">Medicine</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="services-section">
        <h2>Our Pharmacy Services</h2>
        <div class="service-container">
            <div class="service-box">
                <h3>💊 Medicine Management</h3>
                <p>Manage your medicines, stock levels, and expiry dates efficiently with our digital system.</p>
            </div>

            <div class="service-box">
                <h3>👨‍⚕ Customer Support</h3>
                <p>We provide 24/7 customer service to assist with prescription queries and medicine information.</p>
            </div>

            <div class="service-box">
                <h3>🏥 Online Consultation</h3>
                <p>Consult with qualified pharmacists online for safe medicine recommendations and dosage guidance.</p>
            </div>

            <div class="service-box">
                <h3>📦 Home Delivery</h3>
                <p>Get your prescribed medicines delivered directly to your doorstep safely and on time.</p>
            </div>

            <div class="service-box">
                <h3>💻 User Management</h3>
                <p>Secure login system for customers and pharmacists to manage their activities and records easily.</p>
            </div>

            <div class="service-box">
                <h3>📊 Report & Analytics</h3>
                <p>Track your pharmacy’s sales, stock, and performance through smart reports and dashboards.</p>
            </div>
        </div>
    </section>

    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

</body>
</html>