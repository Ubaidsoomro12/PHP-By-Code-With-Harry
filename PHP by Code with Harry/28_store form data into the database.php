<?php
// --------------------Now we learn how to insert data into the database using bootstrap form-----------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap5 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Data</title>
</head>
<body>

<!-- Start of the Navbar here -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Store form data into the Database</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- End of the Navbar here -->

<?php
// Connect to the database
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "ubaid";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Password = $_POST['pass'];

  // Insert data into the database
  $sql = "INSERT INTO `u` (`name`, `email`, `pass`) VALUES ('$Name', '$Email', '$Password')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo '
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Well done!</h4>
      <p>Aww yeah, your entry has been successfully inserted.</p>
      <hr>
    </div>
    ';
  } else {
    echo "Record was not inserted successfully: " . mysqli_error($conn);
  }
}
?>

<!-- Form Start Here -->
<style>
  .container {
    width: 50%;
  }
</style>
<div class="container mt-3">
  <h2>Fill the form</h2>
  <!-- Action: The action attribute specifies where to send the form-data when a form is submitted. -->
  <form action="" method="post">
    <div class="mb-3">
      <b><label for="name" class="form-label">Name:</label></b>
      <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
    </div>
    <div class="mb-3">
      <b><label for="email" class="form-label">Email address</label></b>
      <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <b><label for="pass" class="form-label">Password</label></b>
      <input type="password" class="form-control" id="pass" placeholder="Enter your Password" name="pass">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- Form End Here -->
</body>
</html>
