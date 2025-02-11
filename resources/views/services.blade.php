<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - My Website</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Basic Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        /* Navbar Styles */
        nav {
            background-color: #333;
            padding: 15px;
            position: relative;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav .logo {
            color: #fff;
            font-size: 24px;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 15px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #575757;
        }

        /* Mobile Menu Toggle */
        .menu-icon {
            display: none;
            color: white;
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            top: 18px;
            right: 15px;
        }

        /* Mobile View */
        @media screen and (max-width: 768px) {
            nav ul {
                display: none;
                width: 100%;
                flex-direction: column;
                align-items: center;
                background-color: #333;
                position: absolute;
                top: 60px;
                left: 0;
                padding: 20px 0;
                box-shadow: 0 4px 2px -2px gray;
            }

            nav ul li {
                margin: 10px 0;
            }

            nav ul li a {
                font-size: 20px;
                padding: 10px 20px;
            }

            .menu-icon {
                display: block;
            }

            nav ul.show {
                display: flex;
                animation: slideIn 0.3s ease-out;
            }

            @keyframes slideIn {
                from {
                    transform: translateX(100%);
                }
                to {
                    transform: translateX(0);
                }
            }
        }

        /* Services Content */
        .services-content {
            text-align: center;
            padding: 80px 20px;
            background-color: #fff;
        }

        .services-content h1 {
            font-size: 48px;
            color: #333;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .services-content p {
            font-size: 20px;
            color: #555;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }

        .service-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding-top: 40px;
        }

        .service-item {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .service-item h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .service-item p {
            font-size: 18px;
            color: #777;
            line-height: 1.5;
        }

        /* Responsiveness */
        @media screen and (max-width: 768px) {
            .service-list {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media screen and (max-width: 480px) {
            .service-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <nav>
        <a href="#" class="logo">My Website</a>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <span class="menu-icon" onclick="toggleMenu()">☰</span>
    </nav>

    <div class="services-content">
        <h1>Our Services</h1>
        <p>We offer a range of high-quality services tailored to meet your needs. Explore our services below:</p>

        <div class="service-list">
            <div class="service-item">
                <h3>Web Development</h3>
                <p>We build responsive, interactive, and dynamic websites that will help your business stand out online.</p>
            </div>
            <div class="service-item">
                <h3>Mobile App Development</h3>
                <p>Our team creates user-friendly mobile applications for both Android and iOS platforms to enhance your business outreach.</p>
            </div>
            <div class="service-item">
                <h3>Digital Marketing</h3>
                <p>Boost your online presence and reach your target audience effectively with our expert digital marketing services.</p>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('nav ul');
            menu.classList.toggle('show');
        }
    </script>
    
</body>
</html>
