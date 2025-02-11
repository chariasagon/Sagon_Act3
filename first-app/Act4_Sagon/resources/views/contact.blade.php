<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - My Website</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Basic Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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

        /* Contact Page Styles */
        .contact-container {
            text-align: center;
            padding: 50px;
            background-color: #fff;
        }

        .contact-container h1 {
            font-size: 36px;
            color: #333;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f4f4f4;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .contact-form button {
            background-color: #333;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #575757;
        }

        /* Success Message Styles */
        .success-message {
            display: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin-top: 20px;
            border-radius: 4px;
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

    <div class="contact-container">
        <h1>Contact Us</h1>

        <div class="contact-form">
            <form id="contactForm">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>

            <!-- Success Message -->
            <div id="successMessage" class="success-message">
                Your message has been sent successfully!
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.querySelector('nav ul');
            menu.classList.toggle('show');
        }

        // Show success message when the form is submitted
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form from submitting

            // Show success message
            const successMessage = document.getElementById("successMessage");
            successMessage.style.display = "block";

            // Optionally, clear the form
            document.getElementById("contactForm").reset();
        });
    </script>

</body>
</html>
