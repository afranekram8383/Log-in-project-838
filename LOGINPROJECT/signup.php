<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff20;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        button {
            background: #ff7b54;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #ff5823;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="signup_process.php" method="POST">
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="Enter your email" required><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" placeholder="Enter your password" required><br>
            <button type="submit">Signup</button>
        </form>
    </div>
</body>
</html>
