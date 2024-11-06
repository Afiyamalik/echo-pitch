<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_name = $_POST['username'];
    $passwrd = $_POST['password'];

    // Validate input (add more validation as needed)
    if (empty($user_name) || empty($passwrd)) {
        die("Please enter both username and password.");
    }

    // Connect to your database
    $host = 'localhost'; // Change this if your MySQL server is hosted elsewhere
    $username = 'root'; // Change this to your MySQL username
    $password = ''; // Change this to your MySQL password
    $database = 'recipe_db'; // Change this to your MySQL database name

    // Create a connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to check if the username and password match
    $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$passwrd'";

    // Execute the SQL statement
    $result = $conn->query($sql);

    // Check for errors
    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    // Check if there is a matching record
    if ($result->num_rows > 0) {
        // Username and password are valid
        echo "<script>alert('Login successful!'); window.location.href = 'index.php';</script>";
    } else {
        // Username and password are not valid
        echo "<script>alert('Invalid username or password.'); window.location.href = 'login.php';</script>";
    }

    // Close the database connection
    $conn->close();
}
?>

