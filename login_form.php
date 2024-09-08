<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS Alumni - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f9f9f9;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            padding: 20px 50px;
            background-color: #ffffff;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            font-weight: 700;
            font-size: 1.8em;
            color: #ff893b;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin-right: 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar ul li a:hover {
            color: #ff893b;
        }

        .login-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .login-container h2 {
            font-size: 2.2em;
            margin-bottom: 20px;
            color: #ff893b;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .login-form label {
            font-size: 1.1em;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .login-form input[type="submit"] {
            background-color: #ff893b;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form input[type="submit"]:hover {
            background-color: #d27730;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .footer-logo .logo-img-footer {
            width: 150px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            display: inline;
            margin: 0 10px;
        }

        .footer-links ul li a {
            color: #fff;
            text-decoration: none;
        }

        .footer-links ul li a:hover {
            text-decoration: underline;
        }

        .footer-contact p {
            margin: 5px 0;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding: 10px 0;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login to SIS Alumni</h2>
        <form class="login-form" action="/login.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <input type="checkbox" id="admin" name="admin" value="Admin" style="margin-right: 100px;">
            <label for="admin">Login as Admin</label>

            <input type="submit" id="Register" name="Register">
        </form>
    </div>
    <br><br>
    <center><a href="login_form.php">Home</a></center>



</body>

</html>
