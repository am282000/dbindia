<!doctype html>
<html lang="en">

<?php
    include("functions.php");
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <title>DBI - Customers</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="dbi.php"></i>DBI <i class="fa fa-university" aria-hidden="true"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About </a>
        </li>
        <li class="nav-item active ">
                    <a class="nav-link" href="customers.php">View Customers </a>
                </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

    <br>

    <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Email</th>
                        <th scope="col">Current Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        getCustomers();
                    ?>
                </tbody>
            </table>
        </div>
 


  <section class="socialmedia my-4 mt-3">
    <h4>Feel free to contact us.</h4>
    <div id="social" class="social-icons">
      <ul class="h-list social-icons-contact">
        <li>
          <a href="https://www.linkedin.com/in/ashish-madan-6403781a7" target="_blank">
            <img src="https://img.icons8.com/color/48/000000/linkedin.png" alt="LinkedIn Logo">
          </a>
        </li>
        <li>
          <a href="https://github.com/madaansahaab777" target="_blank">
            <img src="https://img.icons8.com/fluent/48/000000/github.png" alt="GitHub Logo">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/madaansahaab777" target="_blank">
            <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instagram Logo">
          </a>
        </li>
        <li>
          <a href="mailto:madaansahaab777@gmail.com" target="_blank">
            <img src="https://img.icons8.com/fluent/48/000000/gmail.png" alt="Gmail Logo">
          </a>
        </li>
        <li>
          <a href="https://twitter.com/ashishmadan12" target="_blank">
            <img src="https://img.icons8.com/fluent/48/000000/twitter.png" alt="Twitter Logo">
          </a>
        </li>
        <li>
          <a href=" https://wa.me/917015875465" target="_blank">
            <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="Whats App Logo">
          </a>
        </li>
      </ul>
    </div>
  </section>

  <footer>
    <span>Created by <a href="https://madaansahaab777.github.io/portfolio/">Ashish Madan</a> | <span class="far fa-copyright"></span> 2020 All rights
      reserved.</span>
  </footer>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <script src="script.js"></script>
</body>

</html>