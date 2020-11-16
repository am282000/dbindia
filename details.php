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
   
  <title>DBI - Customer Details</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="dbi.php">DBI <i class="fa fa-university" aria-hidden="true"></i></a>
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
        <li class="nav-item active">
                    <a class="nav-link" href="customers.php">View Customers </a>
                </li>
    
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

      <div class="container my-4">
        <?php
            if(isset($_GET['customer_id'])) {
                $c_id = $_GET['customer_id'];
                $get_customers = "select * from customers where id='$c_id'";
                $run_customers = mysqli_query($con, $get_customers);

                while ($row_customers = mysqli_fetch_array($run_customers)) {
                    $customer_id = $row_customers['id'];
                    $customer_name = $row_customers['name'];
                    $customer_email = $row_customers['email'];
                    $current_balance = $row_customers['balance'];
                    $customer_image = $row_customers['image'];
                    echo "
                        <center>
                            <img src='images/customers/$customer_image' height=200px;width=200px;>
                        </center>
                        <br>
                        <table class='table table-bordered' style='text-align: center; font-size: 18px;'>
                            <tr>
                                <th scope='col'>Customer ID</th>
                                <td>$customer_id</td>
                            </tr>
                            <tr>
                                <th scope='col'>Customer Name</th>
                                <td>$customer_name</td>
                            </tr>
                            <tr>
                                <th scope='col'>Customer Email</th>
                                <td>$customer_email</td>
                            </tr>
                            <tr>
                                <th scope='col'>Current Balance</th>
                                <td>$current_balance</td>
                            </tr>
                        </table>
                        </div>
                          

                        <div class='row'>
                            <div class='col-12'>
                                <center>
                                    <button class='btn'>
                                        <a href='customers.php' style='text-decoration: none;'>Back to all customers</a>
                                    </button>
                                </center>
                  
                            <div class='col-12 '>
                                <center>
                                    <button class='btn'>
                                        <a href='transfer.php?customer_id=$c_id' style='text-decoration: none;'>Transfer Money</a>
                                    </button>
                                </center>
                            </div>
                        </div>
                    ";
                }
            }
        ?>
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

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>