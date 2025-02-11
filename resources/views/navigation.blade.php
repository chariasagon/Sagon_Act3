<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Basic Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styles */
        nav {
            background-color: #333;
            padding: 10px;
            position: relative;
        }

        nav .logo {
            color: white;
            font-size: 24px;
            text-decoration: none;
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
            padding: 5px 10px;
        }

        nav ul li a:hover {
            background-color: #575757;
            border-radius: 4px;
        }

        /* Mobile Menu Toggle */
        .menu-icon {
            display: none;
            color: white;
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            top: 15px;
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

    <script>
        function toggleMenu() {
            const menu = document.querySelector('nav ul');
            menu.classList.toggle('show');
        }
    </script>
    
</body>
</html>
