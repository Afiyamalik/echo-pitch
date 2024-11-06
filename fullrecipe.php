<?php
// Connect to your database
$host = 'localhost'; // Change this if your MySQL server is hosted elsewhere
$username = 'root'; // Change this to your MySQL username
$password = ''; // Change this to your MySQL password
$database = 'recipe_db'; // Change this to your MySQL database name
$ndaUrl = "";
// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'title' parameter is set in the URL
if(isset($_GET['title'])) {
    // Retrieve the recipe title from the URL parameter
    $title = $_GET['title'];

    // Prepare SQL statement to select data for the specified recipe title
    $sql = "SELECT * FROM recipe WHERE Title = '$title'";
    $sql1 = "SELECT * FROM ingredient WHERE Title = '$title'";
    $sql2 = "SELECT * FROM instruction WHERE Title = '$title'";
    $sql3 = "SELECT * FROM ratings WHERE Title = '$title'";
    $sql4 = "SELECT * FROM dietary_info WHERE Title = '$title'";
    // Execute the SQL statement
    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    $result4 = $conn->query($sql4);

    // Check if there are any rows returned
    if ($result->num_rows > 0 && $result1->num_rows > 0 && $result2->num_rows > 0 && $result3->num_rows > 0 && $result4->num_rows > 0) {
        // Fetch the recipe details
        $row = $result->fetch_assoc();
        $row1 = $result1->fetch_assoc();
        $row2 = $result2->fetch_assoc();
        $row3 = $result3->fetch_assoc();
        $row4 = $result4->fetch_assoc();

        // Output the recipe details
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $row['Title']; ?> Recipe | EchoPitch</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <style>
                body {
                    background-image: url("images/bgpur.jpg");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-attachment: fixed; 
                    background-position: center;
                    background-color: #2b2b2b; /* Light gray background */
                    font-family: Georgia, 'Times New Roman', Times, serif;
                    color: white; /* Text color */
                }
                .recipe-details {
                    margin-top: 50px;
                }
                img {
                    float: left;
                    margin: 30px;
                }
            </style>
        </head>
        <body>
            <?php include 'menu.php'; ?>
            <div class="container recipe-details">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $row['Title']; ?></h2><br>
                        <p><strong>Category:</strong> <?php echo $row['category']; ?></p>
                        <p><strong>Author:</strong> <?php echo $row['user_name']; ?></p>
                        <p><strong>Contact:</strong> <?php echo $row3['rating']; ?></p>
                        <img src=<?php echo $row['img_url']; ?> alt="Recipe Image" class="img-fluid mb-3" height=400px width=400px>
                        <br>
                        <?php
                            $ingredients = explode(",", $row1['Ingredients']);
                        ?>
                        <p><strong>Requirements:</strong></p>
                        <ul>
                            <?php
                            foreach ($ingredients as $ingredient) {
                                if (!empty(trim($ingredient))) {
                                    echo "<li>$ingredient.</li>";
                                }
                            }
                            ?>
                        </ul>
                        <?php
                            $instructions = explode(".", $row2['instructions']);
                        ?>
                        <p><strong>Description:</strong></p>
                        <ol>
                        <?php
                            foreach ($instructions as $instruction) {
                                if (!empty(trim($instruction))) {
                                    echo "<li><p>$instruction.</p></li>";
                                }
                            }
                        ?>
                        </ol>
                        <p><strong>Average Timeline:</strong> <?php echo $row4['diet_info']; ?></p>
                        <p><b>NOTE : </b>For a more in-depth look at this idea, both parties must sign a 
        <strong>Non-Disclosure Agreement (NDA)</strong>. By signing, you agree that the idea is confidential 
        and cannot be shared or used without permission, even if you decide not to pursue it further.
                        <p><b>Non-Disclosure Agreement : </b><a href="<?php echo $ndaUrl; ?>" target="_blank">View NDA</a></p>
                    </div>
                </div>
            </div>
        </body>
        <footer>
            <h4 class="p-3 bg-dark text-white text-center">EchoPitch Contact: +91 9344381081</h4>
        </footer>
        </html>
        <?php
    } else {
        echo "Idea not found";
    }
} else {
    echo "No Idea specified";
}

// Close the database connection
$conn->close();
?>
