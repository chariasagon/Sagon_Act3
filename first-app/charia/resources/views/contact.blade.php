<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E6E6FA; /* Lavender background */
            color: #4A4A4A;
            margin: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #6A5ACD; /* SlateBlue color for title */
            font-size: 2rem;
            margin-top: 0;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
            width: 280px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        label {
            font-size: 1rem;
            margin-bottom: 5px;
            display: block;
            color: #6A5ACD;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        button {
            background-color: #8A2BE2; /* Soft purple for submit button */
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 10px;
        }
        button:hover {
            background-color: #7A1DCE; /* Darker purple on hover */
        }
        .back-btn {
            background-color: #6A5ACD; /* SlateBlue for "Go back" button */
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
        }
        .back-btn:hover {
            background-color: #5A4FCF;
        }
    </style>
</head>
<body>
  <h1>Contact </h1>

  <!-- Success Message Display -->
  @if(session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
  @endif

  <form action="/submit" method="post">
    @csrf <!-- CSRF protection required for form submission in Laravel -->
    
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email: </label>
    <input type="email" id="email" name="email" required><br>

    <label for="message">Message: </label>
    <textarea id="message" name="message" rows="4" required></textarea><br>

    <button type="submit">Submit</button>
  </form>

  <!-- Go back to menu button -->
  <a href="/menu" class="back-btn">Go back to Menu</a>
</body>
</html>
