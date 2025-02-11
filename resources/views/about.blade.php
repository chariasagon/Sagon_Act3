<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - My Website</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Basic Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            overflow-x: hidden;
        }

        /* Navbar Styles */
        nav {
            background-color: #333;
            padding: 15px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 10;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav .logo {
            color: white;
            font-size: 28px;
            text-decoration: none;
            font-weight: 500;
            margin-right: 30px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
        }

        nav ul li {
            margin-left: 25px;
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
            top: 20px;
            right: 20px;
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
                margin: 15px 0;
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

        /* About Content */
        .about-content {
            text-align: center;
            padding: 100px 20px;
            background: url('https://via.placeholder.com/1600x900') no-repeat center center;
            background-size: cover;
            color: white;
            position: relative;
        }

        .about-content h1 {
            font-size: 56px;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 22px;
            color: #f0f0f0;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Overlay for about content */
        .about-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
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

    <div class="about-content">
        <h1>About Us</h1>
        <p>Welcome to My Website. We are committed to providing high-quality services and content to our users. Our team is dedicated to offering the best experience possible, and we strive to improve our platform continually. This page gives you an overview of who we are and what we do.</p>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('nav ul');
            menu.classList.toggle('show');
        }
    </script>

</body>
</html>
