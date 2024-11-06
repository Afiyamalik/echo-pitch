<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribute | EchoPitch</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-image: url("images/bg6.webp");
            background-color: #2b2b2b;
            color: #fff;
            margin: 0;
            /*padding: 20px;*/
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-position: center;
        }
        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust the height if needed */
        }
        .container {
            margin-top: 10px;
            margin-bottom: 10px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            background: #343a40;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            font-family: Georgia;
            text-align: center;
            margin-bottom: 20px;
        }
        h5{
            color: red;
        }


        label {
            font-weight: bold;
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #555;
            border-radius: 4px;
            background-color: #555E68;
            color: #fff;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            background-color: #007bff; /* Blue color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <?php
        $activePage = 'contribute';
    ?>
    <?php include'menu.php';?>
    <div class="container">
        <h2>Pitch Your Idea</h2>
        <h5> Warning : To protect the originality and uniqueness of your idea, please avoid disclosing too many specific details in this section. Sharing only a high-level overview can help minimize the risk of unauthorized use or duplication.</h5>
        <form action="submit_recipe.php" method="post">
            <label for="Title">Title:</label>
            <input type="text" id="Title" name="Title" required>

            <label for="Ingredients">Requirements:</label>
            <textarea id="Ingredients" name="Ingredients" required></textarea>

            <label for="Instructions">Description:</label>
            <textarea id="Instructions" name="Instructions" required></textarea>

            <label for="Category">Category:</label>
            <select id="Category" name="Category">
                <option value="Seeking Co-Founders">Seeking Co-Founders</option>
                <option value="Looking for Investors">Looking for Investors</option>
                <option value="Collaborative Project">Collaborative Project</option>
                <option value="Mentorship Request">Mentorship Request</option>
                <option value="Free Exposure">Free Exposure</option>
                <option value="Public Domain Pitch">Public Domain Pitch</option>
            </select>

            <label for="Diet_Info">Average Timeline:</label>
            <input type="text" id="Diet_Info" name="Diet_Info">

            <label for="Img_Url">Image URL:</label>
            <input type="text" id="Img_Url" name="Img_Url">

            <label for="Rating">Your Contact:</label>
            <input type="text" id="Rating" name="Rating">

            <label for="User_Name">Your Name:</label>
            <input type="text" id="User_Name" name="User_Name" required>

            <input type="submit" value="Pitch it">
        </form>
        <?php include 'submit_recipe.php'; ?>
    </div>
    <footer>
        <h4 class="p-3 bg-dark text-white text-center">EchoPitch Contact: +91 9344381081</h4>
    </footer>
</body>
</html>


