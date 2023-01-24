<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
    if(isset($_POST['login']))
    {
        $b=$_POST['email'];
        $c=$_POST['pass'];
        $conn=mysqli_connect("localhost","root","","taygoo");
        
    if($conn)
    echo' connection is  establish ';

    $sql = "select * from customer where Email = '$b' and Password = '$c'";  
    $result = mysqli_query($conn,$sql);
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
    $_SESSION["id"] = $row['id'];
    $_SESSION["name"] = $row['Name'];
    $_SESSION["start"]=time();
    $_SESSION["expire"]=$_SESSION["start"]+(40*60);
    } else {
     $message = "Invalid Username or Password!";
    }
}
}
if(isset($_SESSION["name"])) {
  header("Location:dash1.php");
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
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
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
                <a class="nav-link active ml-5  blockquote" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">  
                <a class="nav-link ml-2 blockquote" href="about.html">About</a>
                </li>
              <li class="nav-item">
                <a class="nav-link ml-2 blockquote"  href="dash.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ml-2 blockquote"  href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link"  href="#"><i class="fa fa-search  pl-2"></i></a>
                </li>
            </ul>  
          </div>
          <div class="navbar-nav button d-flex flex-row-reverse">
            <button class="loginbtn ml-4"><i class="fa fa-shopping-bag"></i> Cart</button>
        </div>
        </div>
      </nav>

      <div class="container">
        <div class="form-signin bg-light">
            <form method="post">
            <div class="message"><?php echo $message ?></div>

                <div class="text-center">
                <img class="mb-4 border" src="WhatsApp Image 2022-12-22 at 8.15.54 PM.jpeg" alt="" width="72">
                <h1 class="h3 mb-3 fw-normal">Customer sign in</h1>
            </div>
                <div class="form-group mt-1">
                    <label class="form-label">Email address</label>
                    <input type="text" name="email" class="form-control"  placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>

                    <input type="password" name="pass" class="form-control"  placeholder="Password">
                </div>
                <div class="w-100 reg">
                    <p>Don't have an account  <a href="register.php">Create account</a></p>
                </div>
                <div class="w-100 text-center">
                    <input type="submit" name="login" class="w-75 btn btn-lg btn-dark" value="Login" type="submit">
            </form>
                <br>
                <a href="admin.php">
                <button class="w-75 mt-3 btn btn-lg btn-dark" type="button">Admin Login</button></a>
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