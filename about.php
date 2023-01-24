
<?php
session_start();
require_once('config/db.php');
if(!$_SESSION['name']){
  header ("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
    background: lightyellow;
}
.nav-img{
    width: 50px;
    height: 50px;
    border-radius: 15px;
}
.nav-link{
    position: relative;
}
.nav-link:hover{
    color: red;
}
.nav-link:hover::after{
    opacity: 1;
}
.nav-link::after{
    transition: all 0.2s;
    content: '';
    opacity: 0;
    height: 2px;
    width: 100%;
    position: absolute;
    background-color: red;
    bottom: 0;
    left: 0;
    
}
.nav-link{
    margin-left: 4px;
}
.logo{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: black;
    text-decoration: none;
    font-size: 25px;
    font-weight: 600;
}
.loginbtn{
    background:crimson;
    border: none;
    border-radius: 5px;
    color: white;
    width: 80px;
    height: 40px;
}
.h2{
  background-color:rgb(239, 35, 60);
  height: 55px;
  width: 55px;
  padding-left:4px ;
  margin-right: 15px;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}
.position-relative h1{
  bottom: 230px;
  position: absolute;
  color: white;
  left: 25px;
}
.title{
  height: 450px;
  width: 100%;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.aa {font-size:50px;}
</style>
    <title>About</title>
</head>
<body>
<?php
if($_SESSION["name"]) {
?>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid w-100 ml-lg-5">
          <a href="home .html"><img class="nav-img" src="WhatsApp Image 2022-12-22 at 8.15.54 PM.jpeg" alt="" >
            <span class="logo">Taygoo</span>  </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
              <li class="nav-item">
                <a class="nav-link active ml-5  blockquote" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">  
                <a class="nav-link ml-2 blockquote" href="about.php">About</a>
                </li>
              <li class="nav-item">
                <a class="nav-link ml-2 blockquote"  href="dash1.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ml-2 blockquote"  href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link"  href="#"><i class="fa fa-search  pl-2"></i></a>
                </li>
            </ul>  
          </div>
          <div class="navbar-nav button d-flex flex-row-reverse">
            <a href="logout.php"><button class="loginbtn"><i class="fa fa-user"></i> Logout</button></a>
            <a href="viewcart.php"><button class="loginbtn ml-4"><i class="fa fa-shopping-bag"></i> Cart</button></a>
        </div>
        </div>
      </nav>
      <div class="alert alert-primary">Welcome <?php echo $_SESSION['name']; ?></div>

   <div class="container-fluid w-100  mb-lg-5 mt-lg-5">
    <div class="position-relative">
      <img class="title img-fluid" src="banner3.jpg" alt="">
    <h1 class="">About Us </h1>
    </div>
    <div class="w-50 container-fluid text-center">
     <p class="text-danger mt-3 fw-bold">Our Info</p>
    <h1 class="text-black-75 fw-bold">About Our Taygoo</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatum porro sequi. Quod consequatur impedit sed, corrupti unde eius exercitationem dignissimos cumque minima nam optio ut in, excepturi vero est?</p>
    <button class="btn btn-danger mt-3"><a class="text-decoration-none text-white" href="about.html">Read More <i class="fa fa-arrow-right"></i></a></button>      
    </div>
  </div>

<div class="container-md mb-5 mt-5">
  <div class="row">
    <div class="column">
      <div class="card">
        <p><i class="aa fa fa-user"></i></p>
        <h3>11+</h3>
        <p>users</p>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <p><i class="aa fa fa-check"></i></p>
        <h3>55+</h3>
        <p>Products</p>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <p><i class="aa fa fa-smile-o"></i></p>
        <h3>100+</h3>
        <p>Happy Clients</p>
      </div>
    </div>
        
    <div class="column">
      <div class="card">
        <p><i class="aa fa fa-users"></i></p>
        <h3>6</h3>
        <p>Our Team</p>
      </div>
    </div>
  </div>
</div>
<div class="container text-center">
  <p class="text-danger bold">Our Team</p>
  <h2 class="font-weight-bold mb-2 text-dark">Our Creative Team</h2>
  <div class="row pb-5 mb-4">
    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0"><img src="WhatsApp Image 2023-01-24 at 3.26.47 AM.jpeg" alt="" class="w-100 card-img-top">
          <div class="p-4">
            <h5 class="mb-0">Talha Naeem</h5>
            <p class="small text-muted">Project Manager</p>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0"><img src="WhatsApp Image 2023-01-24 at 3.32.53 AM.jpeg" alt="" class="w-100 card-img-top">
          <div class="p-4">
            <h5 class="mb-0">Danish Ilyas</h5>
            <p class="small text-muted">Project adminstrator</p>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
      <!-- Card-->
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0"><img src="download.png" alt="" class="w-100 card-img-top">
          <div class="p-4">
            <h5 class="mb-0">Saman Shakeel</h5>
            <p class="small text-muted">CEO-1</p>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-4">
      <!-- Card-->
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0"><img src="download.png" alt="" class="w-100 card-img-top">
          <div class="p-4">
            <h5 class="mb-0">Nisha Ejaz</h5>
            <p class="small text-muted">CEO-2</p>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-4">
      <!-- Card-->
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0"><img src="download.png" alt="" class="w-100 card-img-top">
          <div class="p-4">
            <h5 class="mb-0">Muhammad Waleed</h5>
            <p class="small text-muted">Project Adaviser</p>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 mt-4">
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0"><img src="download.png" alt="" class="w-100 card-img-top">
          <div class="p-4">
            <h5 class="mb-0">Mujtaba Haider</h5>
            <p class="small text-muted">Team Manager</p>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item "><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <footer
          class="text-center text-lg-start text-white"style="background-color: #45526e">
    <div class="container p-4 pb-0">
      <section class="">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Strong Together
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nostrum earum voluptas aliquid maxime nisi, porro est ea et ipsa. Dicta cumque omnis quia, dolore facere excepturi necessitatibus quo nulla!
            </p>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 pro">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white text-decoration-none">Mens</a>
            </p>
            <p>
              <a class="text-white text-decoration-none">Womens</a>
            </p>
            <p>
              <a class="text-white text-decoration-none">Children</a>
            </p>
            <p>
              <a class="text-white text-decoration-none">Baby</a>
            </p>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white text-decoration-none" href="home.html">Home</a>
            </p>
            <p>
              <a class="text-white text-decoration-none" href="about.html">About</a>
            </p>
            <p>
              <a class="text-white text-decoration-none" href="dash.php">Product</a>
            </p>
            <p>
              <a class="text-white text-decoration-none" href="contact.html">Contact</a>
            </p>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fa fa-home mr-3"></i>Strong Togather</p>
            <p><i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fa fa-phone mr-3"></i> +9211111111</p>
            <p><i class="fa fa-print mr-3"></i> +9211111111</p>
          </div>
        </div>
      </section>
      <hr class="my-3">
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center">
            <a href="https://www.facebook.com/login/"
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/home?lang=en"
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa fa-twitter"></i
              ></a>
            <a href="https://www.google.com"
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa fa-google"></i
              ></a>
            <a href="https://www.instagram.com/accounts/login/"
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fa fa-instagram"></i
              ></a>
          </div>
        </div>
      </section>
    </div>
  </footer>
</div>
    </body>
</html>
<?php
}
?>