<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Basic Styles */
        body {
            font-family: 'Roboto', Arial, sans-serif;
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
            padding: 5px 15px;
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

        /* Home Content */
        .home-content {
            text-align: center;
            padding: 120px 20px;
            background: url('https://via.placeholder.com/1600x900') no-repeat center center;
            background-size: cover;
            color: white;
            position: relative;
            z-index: 1;
        }

        .home-content h1 {
            font-size: 56px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            margin-bottom: 20px;
        }

        .home-content p {
            font-size: 24px;
            color: #f0f0f0;
            margin-bottom: 30px;
        }

        .home-content a.btn {
            background-color: #ff5722;
            color: white;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .home-content a.btn:hover {
            background-color: #e64a19;
        }

        /* Overlay for home content */
        .home-content::before {
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

    <div class="home-content">
        <h1>Welcome to My Website</h1>
        <p>This is the Home page where you'll find all the latest updates and information.</p>
        <a href="/about" class="btn">Learn More</a>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('nav ul');
            menu.classList.toggle('show');
        }
    </script>
    
</body>
</html>
