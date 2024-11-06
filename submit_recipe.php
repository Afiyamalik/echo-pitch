<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_name = $_POST['User_Name'];

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

    // Prepare SQL statement to check if the username exists
    $sql = "SELECT * FROM users WHERE user_name = '$user_name'";

    // Execute the SQL statement
    $result = $conn->query($sql);

    // Check if there is a matching record
    if ($result->num_rows == 0) {
        // Username doesn't exist, redirect to create account page
        echo "<script>alert('User Name does not exist. Please create your account to contribute.'); 
        window.location.href = 'SignUp.php';</script>";
        exit; // Stop further execution
    }
    else{
        $title = $_POST['Title'];
        $ingredients = $_POST['Ingredients'];
        $instructions = $_POST['Instructions'];
        $category = $_POST['Category'];
        $diet_info = $_POST['Diet_Info'];
        $image = $_POST['Img_Url'];
        $rating = $_POST['Rating'];
        $author = $_POST['User_Name'];

        // Validate input (add more validation as needed)
        if (empty($title) || empty($ingredients) || empty($instructions) || empty($category) || empty($author)) {
            die("Please fill out all required fields.");
        }

        // Prepare SQL statement to insert data into the table
        $sql1 = "INSERT INTO recipe VALUES ('$title', '$category','$author','$image')";
        $sql2 = "INSERT INTO ingredient VALUES ('$title', '$ingredients')";
        $sql3 = "INSERT INTO instruction VALUES ('$title','$instructions')";
        $sql4 = "INSERT INTO ratings VALUES ('$title', '$rating')";
        $sql5 = "INSERT INTO dietary_info VALUES ('$title', '$diet_info')";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE) {
        // Success message
        echo '<script>alert("your business idea is pitched successfully."); window.location.href = "contribute.php";</script>';
    } else {
        // Error message
        echo '<script>alert("Error: ' . $conn->error . '");</script>';
    }
}

        // Close the database connection
        $conn->close();
    }
    ?>
