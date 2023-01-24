
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
    background: rgb(230, 230, 224);
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
  width: 65px;
  padding-left:4px ;
  margin-right: 15px;
}
.title{
  height: 450px;
  width: 100%;
}
.position-relative h1{
  bottom: 230px;
  position: absolute;
  color: white;
  left: 25px;
}
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
            <a href="logout.php">
            <button class="loginbtn"><i class="fa fa-user"></i> logout</button></a>
            <a href="viewcart.php"><button class="loginbtn ml-4"><i class="fa fa-shopping-bag"></i> Cart</button></a>

        </div>
        </div>
      </nav>
      <div class="alert alert-primary">Welcome <?php echo $_SESSION['name']; ?></div>

      <div class="position-relative">
        <img class="title img-fluid" src="banner3.jpg" alt="">
      <h1 class="">Contact Us </h1>
      </div>
   <div class="container-fluid w-100  mb-lg-5 mt-lg-5">
    <div class="w-50 container-fluid text-center">
     <p class="text-danger mt-3 fw-bold">GET IN TOUCH</p>
    <h1 class="text-black-75 fw-bold">Contact With Our Support <br>
      During Emergency!</h1>
    </div>
         </div>
  
  <div class="container d-flex mt-lg-5">
        <div class="col-md-4 d-flex flex-row ">
          <i class="fi-xnluxl-map-marker h2 rounded-circle"></i>
          <div><h3>Office Address:</h3>
            <p>Strong Togather, 343 Taygoo, Main street, PK - 32126.</p></div>
        </div>
        <div class="col-md-4 ml-lg-3 d-flex flex-row ">
          <i class="fi-xnluxl-map-marker h2 rounded-circle"></i>
          <div><h3>Call For Help:</h3>
            <p class="p-0">+92-11111111</p>
            <p class="p-0">+92-11111111</p></div>
        </div>
        <div class="col-md-4 ml-lg-0 d-flex flex-row ">
          <i class="fi-xnluxl-map-marker h2 rounded-circle"></i>
          <div><h3>Mail Us:</h3>
            <p>abc@gmail.com</p>
            <p>abc@gmail.com</p></div>
        </div>
  </div>

  <div class="container-md bg-white mt-4 mb-5">
    <h3 class="text-dark">Enter Your message</h3>
    <form  action="" method="POST">
      <div class="row">
          <div class="col-md-6">
              <div class="md-form mb-0">
                <label for="name" class="">Your name</label>
                  <input type="text" placeholder="Enter Name" id="name" name="name" class="form-control">
              </div>
          </div>
          <div class="col-md-6">
              <div class="md-form mb-0">
                <label for="email" class="">Your email</label>
                  <input type="text" placeholder="Enter email" id="email" name="email" class="form-control">

              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="md-form mb-0">
                <label for="subject" class="">Subject</label>
                  <input type="text" placeholder="Enter Subject" id="subject" name="subject" class="form-control">
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="md-form">
                <label for="message">Your message</label>
                  <textarea type="text" id="message" placeholder="Enter Your Message" name="message" rows="5" class="form-control md-textarea"></textarea>
              </div>
          </div>
      </div>
      <div class="w-100 text-center">
        -<input class="mt-3 bg-danger text-white border-0 mb-4" type="submit" name="msg" value="Send Message">
      </div>
  </form>
  </div>
  <div class="container-fluid">
    
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
                <a class="text-white text-decoration-none" href="home.php">Home</a>
              </p>
              <p>
                <a class="text-white text-decoration-none" href="about.php">About</a>
              </p>
              <p>
                <a class="text-white text-decoration-none" href="dash1.php">Product</a>
              </p>
              <p>
                <a class="text-white text-decoration-none" href="contact.php">Contact</a>
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
      <?php
}else echo "<h1>Please login first .</h1>";
?>
  </html>