<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['n1'];
    $email = $_POST['e1'];
    $password = $_POST['p1'];
    $confirm_password = $_POST['p2'];

    // Validate input (add more validation as needed)
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        die("Please fill out all fields.");
    }

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Connect to your database
    $host = 'localhost';
    $username = 'root';
    $password_db = '';
    $database = 'recipe_db';

    $conn = new mysqli($host, $username, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to insert user data into the database
    $sql = "INSERT INTO users VALUES  ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Account Created Successfully!'); window.location.href = 'login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>