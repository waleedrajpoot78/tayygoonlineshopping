<?php
if(isset($_POST['insert']))
{
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['pass'];
    $conn=mysqli_connect("localhost","root","","taygoo");

    if($conn)
    echo' connection is  establish ';

  $sql="insert into customer (Name,Email,Password) values ('$a','$b','$c')";

  if(mysqli_query($conn,$sql))
  {
    echo '<script>alert("Registration Successful")</script>';
    header('Location: login.php');
  }
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
        background: linear-gradient(to right, #243B55, #141E30);
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
</style>
    <title>About</title>
<script>
    function fun(){
        var name=document.getElementById("name").value;
        var email=document.getElementById("email").value;
        var pass=document.getElementById("pass").value;
        var cpass=document.getElementById("cpass").value;
        if (!pass.match(cpass)) {
            alert ("Password Does not match");
            return false;
        }
        rname(name);
        remail(email);
        rpass(pass);
    }
   /* function rname(name){
        var rname = /^[a-zA-Z\-]+$/;
            if(!rname.test(name))
            {
                alert("name is invalid");
                return false;
            }
    }*/
    function email(email){
        var remail = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
            if(!remail.test(email))
            {
                alert("email invalid");
                return 0;
            }
}
function rpass(pass){
    var rpass=  /^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g;
            if(!rpass.test(pass))
            {
                alert("password invalid");
                return 0;
            }
}
</script>
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
            <a href="login.html"><button class="loginbtn"><i class="fa fa-user"></i> Login</button></a>
            <button class="loginbtn ml-4"><i class="fa fa-shopping-bag"></i> Cart</button>
        </div>
        </div>
      </nav>


      <div class="mt-5 mb-5">
          <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post">

                <div class="form-outline mb-4">
                    <label class="form-label" for="">Your Name</label>
                  <input type="text" id="name" name="name" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="">Your Email</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="">Password</label>
                <input type="password" id="pass" name="pass" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="">Repeat your password</label>
                  <input type="password" id="cpass" name="cpass" class="form-control form-control-lg" />
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit"  onclick="fun()" value="Login" name="insert" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" >
                </div>
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>
            </div>
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