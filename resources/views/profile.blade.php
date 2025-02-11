<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            background-color: #E6E6FA; /* Lavender background */
            color: #4B0082; /* Darker purple text for contrast */
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        h1, h2 {
            color: #6A5ACD; /* Medium purple for headings */
        }

        .profile-img {
            width: 300px;
            height: 300px;
            border-radius: 50%; /* Makes the image circular */
            object-fit: cover; /* Ensures the image fits well within the circle */
            border: 5px solid #9370DB; /* Adds a lavender border around the image */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow */
            margin: 20px 0;
        }

        ul {
            list-style-type: none; /* Removes default bullet points */
            padding: 0;
        }

        li {
            background-color: #D8BFD8; /* Light lavender background for list items */
            margin: 10px auto;
            padding: 10px;
            width: 200px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #9370DB; /* Soft purple for the button */
            color: white;
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #6A5ACD; /* Darker purple on hover */
        }
    </style>
</head>
<body>
    <h1>Charia</h1>
    <p>I'm Charia Felicilda Sagon, 22 years old, from Sta. Cruz, San Francisco, Southern Leyte.</p>
    
    <!-- Image element with correct path to the image -->
    <img src="images/charia.jpg" alt="Charia's Photo" class="profile-img">
    
    <h2>My Hobbies</h2>
    <ul>
        <li>Playing Tennis</li>
        <li>Watching Dramas</li>
    </ul>
    
    <a href="/menu">Go to Menu Page</a>
</body>
</html>
