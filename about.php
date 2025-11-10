<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | MyPharma</title>
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

        /* About Section */
        .about-section {
            padding: 80px 10%;
            text-align: center;
        }

        .about-section h2 {
            color: #00ffcc;
            font-size: 2.5rem;
            margin-bottom: 25px;
        }

        .about-section p {
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .mission {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            margin: 40px 0;
        }

        .mission h3 {
            color: #00ffcc;
            margin-bottom: 10px;
        }

        /* Why Choose Us */
        .choose-section {
            padding: 50px 10%;
            text-align: center;
        }

        .choose-section h3 {
            color: #00ffcc;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .choose-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .choose-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
            transition: 0.3s;
        }

        .choose-box:hover {
            transform: translateY(-10px);
            background: rgba(0, 0, 0, 0.85);
        }

        /* Team Section */
        .team-section {
            padding: 50px 10%;
            text-align: center;
        }

        .team-section h3 {
            color: #00ffcc;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .team-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .team-member {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
            width: 250px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .team-member h4 {
            color: #00ffcc;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 0.9rem;
        }

        footer {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            font-size: 0.9rem;
        }

        @media (max-width: 600px) {
            .about-section, .choose-section, .team-section {
                padding: 50px 5%;
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
                <li><a href="about.php" style="color:#00ffcc;">About Us</a></li>
                <li><a href="medicine.php">Medicine</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="about-section">
        <h2>About MyPharma</h2>
        <p>
            Welcome to <strong>MyPharma</strong> — your trusted online pharmacy management system. 
            We aim to simplify medicine management, streamline operations for pharmacists, and make healthcare 
            more accessible to customers. Our platform connects patients, pharmacists, and healthcare providers 
            to ensure safe and timely delivery of medicines.
        </p>

        <div class="mission">
            <h3>Our Mission</h3>
            <p>
                Our mission is to empower pharmacies with modern digital tools that ensure efficiency, 
                accuracy, and customer satisfaction. We strive to make medicine management simple, secure, 
                and reliable for everyone.
            </p>
        </div>
    </section>

    <section class="choose-section">
        <h3>Why Choose MyPharma?</h3>
        <div class="choose-container">
            <div class="choose-box">
                <h4>💻 Easy Management</h4>
                <p>Manage stock, expiry, and sales effortlessly with an easy-to-use interface.</p>
            </div>
            <div class="choose-box">
                <h4>🔒 Secure Login</h4>
                <p>Separate login for pharmacists and customers ensures secure data access.</p>
            </div>
            <div class="choose-box">
                <h4>🚚 Fast Delivery</h4>
                <p>Quick and safe medicine delivery directly to your home.</p>
            </div>
            <div class="choose-box">
                <h4>📞 24/7 Support</h4>
                <p>Our team is always available to assist you with your pharmacy needs.</p>
            </div>
        </div>
    </section>

    <section class="team-section">
        <h3>Our Team</h3>
        <div class="team-container">
            <div class="team-member">
                <img src="pharmacist1.jpg" alt="Team Member">
                <h4>Dr. Rina Sharma</h4>
                <p>Chief Pharmacist</p>
            </div>
            <div class="team-member">
                <img src="pharmacist2.jpg" alt="Team Member">
                <h4>Dr. Aakash Singh</h4>
                <p>Medicine Specialist</p>
            </div>
            <div class="team-member">
                <img src="pharmacist3.jpg" alt="Team Member">
                <h4>Dr. Kriti Bhandari</h4>
                <p>Pharmacy Manager</p>
            </div>
        </div>
    </section>

    <footer>
        © 2025 MyPharma | Designed for Pharmacy Management System Project
    </footer>

</body>
</html>