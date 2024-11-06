<html>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">EchoPitch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item <?php echo ($activePage == 'home') ? 'active' : ''; ?>">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item <?php echo ($activePage == 'contribute') ? 'active' : ''; ?>">
          <a class="nav-link" href="contribute.php">Contribute</a>
        </li>
        <li class="nav-item <?php echo ($activePage == 'recipes') ? 'active' : ''; ?>">
          <a class="nav-link" href="recipe_cards.php">Ideas</a>
        </li>
        <li class="nav-item <?php echo ($activePage == 'login') ? 'active' : ''; ?>">
          <a class="nav-link" href="login.php">Login/SignUp</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>

