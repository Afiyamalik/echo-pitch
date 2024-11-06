<?php
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

// Prepare SQL statement to select data from your recipe table
$sql = "SELECT * FROM recipe";

// Execute the SQL statement
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideas | EchoPitch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome library -->
    <style>
        body {
            background-image: url("images/bg6.webp");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-position: center;
            background-color: #f8f9fa; /* Light gray background */
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white; /* Text color */
        }
        .card {
            background-color: #343a40;
            margin-bottom: 20px; /* Add space between cards */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow to cards */
            color: white;
        }
        .card-img-top {
            height: 200px; /* Adjust image height */
            object-fit: cover; /* Cover image within the card */
        }
        .card-body {
            padding: 20px; /* Add padding inside card body */
        }
        .card-title {
            font-size: 1.25rem; /* Larger font size for title */
            font-weight: bold; /* Bold font for title */
            margin-bottom: 10px; /* Add space below title */
        }
        .card-category{
            font-size: 1rem; /* Font size for category and author */
            color: #ffffff; /* Gray color for category and author */
            margin-bottom: 5px; /* Add space below category and author */
        }
        .btn-success {
            background-color: #007bff; /* Blue color for button */
            color: white; /* White text color for button */
            border: none; /* Remove border */
        }
        .btn-success:hover {
            background-color: #0056b3; /* Darker blue color on hover */
        }
        /* CSS for star rating */
        .rating {
            unicode-bidi: bidi-override;
            color: #57564a;
            font-size: 18px;
            height: 18px;
            margin-bottom: 10px; /* Adjust space below rating */
        }
        .rating span {
            display: inline-block;
            width: 1.1em;
        }
        .checked {
            color: orange;
        }
    </style>
</head>
<body>
    <?php
        $activePage = 'recipes';
        include 'menu.php';
    ?>
    <br>
    <div class="container">
        <div class="row">
            <?php
            // Check if there are any rows returned
            if ($result->num_rows > 0) {
                // Loop through each row of data
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src=<?php echo $row['img_url']; ?> alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['Title']; ?></h5>
                                <h6 class="card-category"><?php echo $row['category']; ?></h6>
                                <div class="rating">
                                    <?php
                                    $title = $row['Title'];
                                    $rating_sql = "SELECT rating FROM ratings WHERE Title = '$title'";
                                    $rating_result = $conn->query($rating_sql);
                                    
                                    if ($rating_result->num_rows > 0) {
                                        $rating_row = $rating_result->fetch_assoc();
                                        $rating = $rating_row['rating'];
                                        
                                        // Display stars based on the rating
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rating) {
                                                echo '<span class="fa fa-star checked"></span>';
                                            } else {
                                                echo '<span class="fa fa-star"></span>';
                                            }
                                        }
                                    } else {
                                        echo "No Ideas yet";
                                    }
                                    ?>
                                </div>
                                <a href="fullrecipe.php?title=<?php echo urlencode($row['Title']); ?>" class="btn btn-success">View IDEA</a>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            } else {
                echo "No records found";
            }
            ?>

        </div>
    </div>
    <footer>
        <h4 class="p-3 bg-dark text-white text-center">EchoPitch Contact: +91 9344381081</h4>
    </footer>
</body>
</html>
<?php
// Close the database connection
$conn->close();
?>
