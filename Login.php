<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | EchoPitch</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("images/bg6.webp");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-position: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #333; /* Dark background color */
            color: #fff; /* Text color */
            text-align: center;
            /*padding: 50px;*/
        }

        form {
            background-color: #343a40; /* Darker form background */
            padding: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            width: 400px;
            margin: 0 auto;
        }
        
        h4, h5 {
            margin-top: 10px;
            color: #fff; /* Header text color */
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #666; /* Darker border color */
            border-radius: 4px;
            background-color: #555E68; /* Input field background */
            color: #fff; /* Input text color */
        }

        input[type="submit"], input[type="button"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 20px;
            color: #ccc; /* Text color for paragraph */
        }
    </style>
</head>
<body>
    <?php
        $activePage = 'login';
    ?>
    <?php include'menu.php';?>
    <br>
    <form id="login_form" action="validate_login.php" method="post">
        <h4>LOGIN INTO YOUR ACCOUNT</h4>
        <h5>UserName</h5>
        <input type="text" name="username" placeholder="Enter your username">

        <h5>Password</h5>
        <input type="password" name="password" placeholder="Enter your password" required minlength="8" maxlength="15">

        <br><br>
        <input type="submit" value="Login">
    </form>
    <p>New User? Sign up to create your own account</p>
    <input type="button" value="SignUp" onclick="create()">
    <br>
    <script>
        function create() {
            window.location = "SignUp.php";
        }
    </script>
    <br>
    <footer>
        <h4 class="p-3 bg-dark text-white text-center">EchoPitch Contact: +91 9344381081</h4>
    </footer>
</body>
</html>
