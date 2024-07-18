<?php
// now here we  handle our form data into the server side and any other 
// using PHP we can easily handle our form data into the database
// so now we dontknow what is database thats why we use bootstrap5 element alert to show our form data just for example. 

// isset() function: This function returns true if the variable exists and is not NULL, otherwise it returns false.
// $_POST: contains an array of variables received via the HTTP POST method.
//$_SERVER: is a PHP super global variable which holds information about headers, paths, and script locations.
if ($_SERVER['REQUEST_METHOD'] =='POST' ){
    $Email = $_POST['email'];// here we store name attribute "name" which we use in input tag in HTML form
    $Password = $_POST['pass'];// here we store name attribute "email" which we use in input tag in HTML form
    //now print the data wich we put in input tags
    echo'
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you have successfully insert your Email : '.$Email.' & Password : '.$Password.' </p>
    <hr>
    </div>
    ';
    // so here we tamprary you alert to handle and check how our data post in HTML form and how we use when we want.

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap5 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Get & Post</title>
</head>
<body>

<!-- Start of the Navebar here -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get & Post </a>
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
<!-- End of the Navebar here -->
<!-- Form Start Here -->
 <style>
    .container{
        width: 50%;
    }
 </style>
 <div class="container mt-3" >
    <h2>Fill the form</h2>
    <!-- Action: The action attribute specifies where to send the form-data when a form is submitted. -->
    <!------------------------ What is HTTP?----------------------------------------------------------------
    The Hypertext Transfer Protocol (HTTP) is designed to enable communications between clients and servers.
    HTTP works as a request-response protocol between a client and server.
    Example: A client (browser) sends an HTTP request to the server; then the server returns a response to the client. 
    The response contains status information about the request and may also contain the requested content. -->
    <!-- The two most common HTTP methods are: GET and POST.
         1_ The GET method is used to request data from a specified resource. -->
    <!-- 2_ The POST method is used to send data to a server to create/update a resource. -->
     
<form action="21_Get&Post.php" method="post">
  <div class="mb-3">
    <b><label for="email" class="form-label">Email address</label></b>
    <input type="email" class="form-control" id="email" placeholder="Enter your Enail" name="email">
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



