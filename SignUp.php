<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | KitchenCraze</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-position: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #333; /* Dark background color */
            color: #fff; /* Text color */
            text-align: center;
            /padding: 50px;/
        }

        form {
            background-color: #343a40; /* Darker form background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            width: 500px;
            margin: 0 auto;
        }

        h3, h4 {
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
    <form action="register_user.php" method="post">
        <h3>CREATE YOUR ACCOUNT</h3>
        <label for="n1">Name</label>
        <input type="text" id="n1" name="n1" placeholder="Enter your name" required>

        <label for="e1">Email</label>
        <input type="text" id="e1" name="e1" placeholder="Enter your email id" required>

        <label for="p1">Set Password</label>
        <input type="password" id="p1" name="p1" placeholder="Set a password" required>

        <label for="p2">Confirm Password</label>
        <input type="password" id="p2" name="p2" placeholder="Confirm your password" required>

        <input type="submit" value="Create Account">
    </form>
    <?php include 'register_user.php'; ?>

    <script>
        function create_account() {
            var n = document.getElementById("n1").value;
            var e = document.getElementById("e1").value;
            var p = document.getElementById("p1").value;
            var cp = document.getElementById("p2").value;

            var letters = /^[A-Za-z]+$/;
            var email_val = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (n == '' || e == '' || p == '' || cp == '') {
                alert("Please enter all details correctly");
            } else if (!letters.test(n)) {
                alert('Name is incorrect; must contain alphabets only');
            } else if (!email_val.test(e)) {
                alert('Invalid email format; please enter a valid email id');
            } else if (p != cp) {
                alert("Passwords do not match");
            } else if (p.length > 12) {
                alert("Password maximum length is 12");
            } else if (p.length < 6) {
                alert("Password minimum length is 6");
            } else {
                alert("Your account has been created successfully. Redirecting...");
                window.location = "index.php";
            }
        }
    </script>
    <footer>
        <h4 class="p-3 bg-dark text-white text-center">EchoPitch Contact: +91 9344381081</h4>
    </footer>
</body>
</html>