<html>
<head>
    <meta charset="UTF-8">
    <title>Home | EchoPitch</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
 <style>
    h2 {
    font-size: 64px;
}

body {
    background-image: url("images/bg6.webp");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    font-family: Georgia, serif;
    text-align: justify;
    background-color: #2b2b2b;
    color: white;
    font-size: 20px;
}

p {
    margin-left: 10px;
    margin-right: 10px;
}

.carousel img {
    margin-top: 10px;
    margin-left: 145px;
    margin-right: 40px;
}

.card {
    background-color: #343a40;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* Ensure the card takes up full height */
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

.card-body {
    text-align: justify;
    margin-left: 10px;
    margin-right: 10px;
}

.card-title {
    margin-top: 10px;
    text-align: center;
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.btn-success {
    background-color: #007bff;
    color: white;
    border: none;
    align-self: center; /* Center button horizontally */
    margin-left: 130px;
    /* Add some space below the button */
}

.btn-success:hover {
    background-color: #0056b3;
}

 </style>
</head>
<body>
  <?php
    $activePage = 'home';
  ?>
 <?php include'menu.php';?>
<br>
 <h2 class="text-center">EchoPitch</h2>
 <p class="py-3">Welcome to EchoPitch, your go-to destination for entrepreneurial inspiration and innovative business ideas! At EchoPitch, we’re passionate about fostering creativity and believe that sharing ideas is not just about business—it’s about sharing visions, experiences, and the drive to make a meaningful impact in the world..</p>
  <section class="my-5">
     <div class="container-fluid">
        <div class="row"> 
        <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
  <img class="card-img-top" src="contribute.jpg" alt="Card image">
  <div class="card-body serviceimg">
    <h4 class="card-title">Contribute</h4>
    <p class="card-text">"Your unique perspectives could spark the next big opportunity!"</p><br>
     <a href="contribute.php" class="btn btn-success">Contibute</a>
  </div>
</div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
  <img class="card-img-top" src="explore.jpg" alt="Card image">
  <div class="card-body serviceimg">
    <h4 class="card-title">Our inspirations</h4>
    <p class="card-text">"Every idea has potential. Bringing innovative business concepts from our community to you. Explore new possibilities with us!"</p>
    <a href="recipe_cards.php" class="btn btn-success">Explore</a>
  </div>
</div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
  <img class="card-img-top" src="images/about.webp" alt="Card image">
  <div class="card-body serviceimg">
    <h4 class="card-title">About Us</h4>
    <p class="card-text">"Sharing entrepreneurial vision, one idea at a time, at EchoPitch."</p><br>
    <a href="#about" class="btn btn-success">About Us</a>
  </div>
</div>
            
        </div>
        </div>
         
     </div>
    </section>

<h1 class="text-center">Our Ideas</h1>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="DigitalMarketing.webp" alt="Alfredo" width="80%" height="85%">
      <div class="carousel-caption">
        <h3>Digital Marketing Agency for Small Businesses</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Meal_Kits.jpg" alt="Pancakes" width="80%" height="85%">
      <div class="carousel-caption">
        <h3>PPersonalized Meal Kit Delivery</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="RemoteTeamBuilding.jpg" alt="Cherry" width="80%" height="85%">
      <div class="carousel-caption">
        <h3>Remote Team Building Activities</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="blockchain.jpg" alt="Tandoori" width="80%" height="85%">
      <div class="carousel-caption">
        <h3>Blockchain-Based Supply Chain Management</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="elearning.jpg" alt="Salad" width="80%" height="85%">
      <div class="carousel-caption">
        <h3>Online Learning Marketplace</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br><br>
<div id='about'>
<h1 class="text-center">About Us</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
            <p class="py-3">
            Our journey began with a simple vision: to create a platform where aspiring entrepreneurs, innovators, and creative minds from all backgrounds could come together to share and explore business ideas. Whether you're a seasoned entrepreneur, a student with a fresh perspective, or someone passionate about solving real-world problems, EchoPitch is here to inspire and empower you on your entrepreneurial journey.

<br><br>
What sets EchoPitch apart is our dynamic community of thinkers and doers, each contributing unique insights, ideas, and feedback. From groundbreaking startup concepts to small business ideas crafted to address everyday challenges, our platform celebrates the diversity of thought and innovation from all corners of the world.
<br><br>
But EchoPitch is more than just a collection of ideas – it’s a place where entrepreneurs connect, learn, and grow together. Whether you're searching for creative business concepts, looking to collaborate, or seeking inspiration, you’ll find a treasure trove of possibilities right here.

<br><br>

Join us in our mission to make entrepreneurship accessible, inspiring, and achievable for everyone. Whether you’re aiming to start a new venture, solve a unique problem, or simply explore the world of innovation, EchoPitch is your trusted partner on the journey from idea to impact.

<br><br>

So, dive in, share your concepts, explore new ideas, and let’s turn dreams into reality together!

<br><br>

Here's to fresh ideas and future possibilities,<br>
The EchoPitch Team 
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <br><br><br><br>
            <img src="images/aboutus.avif" class="img-fluid aboutimg">
        </div>
    </div>
</div>
      </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
<footer>
  <h4 class="p-3 bg-dark text-white text-center">EchoPitch Contact: +91 9344381081</h4>
</footer>
</html>
