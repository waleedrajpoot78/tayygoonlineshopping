
<?php
session_start();
require_once('config/db.php');
if(!$_SESSION['name']){
  header ("location:login.php");
}
if(isset($_POST['view']))
{

    $id=$_POST['id'];
    $sql="select p_id,p_name,p_price,image,p_desc from product where p_id='$id'";
$resultset=mysqli_query($conn,$sql);
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

</style>

    <title>Dashboard</title>
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
            <a class="mr-3" href="login.php"><button class="loginbtn"><i class="fa fa-user"></i> Login</button></a>
            <a href="viewcart"><button class="loginbtn ml-4"><i class="fa fa-shopping-bag"></i> Cart</button></a>

        </div>
        </div>
      </nav>

      <div class="py-5">
            <div class="container px-4 px-lg-5 my-5 bg-light">
            <?php
          while ($row=mysqli_fetch_assoc($resultset)) {
          ?>
          <form action="cart.php" method="post">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" name="image" <?php echo 'src=images/'.$row["image"].' alt="IMAGE NOT FOUND"' ?>
                ></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder" ><?php echo $row['p_name']; ?></h1>
                        <input type="hidden" name="p_name" value="<?php echo $row['p_name']; ?>">
                        <div class="fs-5 mb-5">
                            <span><?php echo $row['p_price']; ?>\-</span>
                            <input type="hidden" name="p_price" value="<?php echo $row['p_price']; ?>">

                        </div>
                        <p class="lead"><?php echo $row['p_desc']; ?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" name="qty" type="num" value="1" style="max-width: 3rem" />
                            <button type="submit" class="btn btn-primary">add to cart</button>
                        </div>
                    </div>
                </div>
                </form>
                <?php
        }
          ?>
            </div>
          <script>
            function fun(){
              alert ("please login first");
            }
          </script>
          </div>
    <div class="container-fluid">
        <footer
                class="text-center text-lg-start text-white"style="background-color: #45526e">
          <div class="container p-4 pb-0">
            <section class="">
              <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">
                    Taygoo
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut error nam iusto inventore earum, nostrum deleniti aperiam id! Ratione eius molestiae maxime enim consequuntur voluptate a est expedita quaerat fuga.
                  </p>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                  <p>
                    <a class="text-white">MDBootstrap</a>
                  </p>
                  <p>
                    <a class="text-white">MDWordPress</a>
                  </p>
                  <p>
                    <a class="text-white">BrandFlow</a>
                  </p>
                  <p>
                    <a class="text-white">Bootstrap Angular</a>
                  </p>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">
                    Useful links
                  </h6>
                  <p>
                    <a class="text-white">Your Account</a>
                  </p>
                  <p>
                    <a class="text-white">Become an Affiliate</a>
                  </p>
                  <p>
                    <a class="text-white">Shipping Rates</a>
                  </p>
                  <p>
                    <a class="text-white">Help</a>
                  </p>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                  <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                  <p><i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
                  <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                  <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
              </div>
            </section>
            <hr class="my-3">
            <section class="p-3 pt-0">
              <div class="row d-flex align-items-center">
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                  <div class="p-3">
                    ?? 2020 Copyright:
                    <a class="text-white" href="home .html"
                       >Strong Togather</a
                      >
                  </div>
                </div>
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                  <a
                     class="btn btn-outline-light btn-floating m-1"
                     class="text-white"
                     role="button"
                     ><i class="fa fa-facebook-f"></i>
                  </a>
                  <a
                     class="btn btn-outline-light btn-floating m-1"
                     class="text-white"
                     role="button"
                     ><i class="fa fa-twitter"></i
                    ></a>
                  <a
                     class="btn btn-outline-light btn-floating m-1"
                     class="text-white"
                     role="button"
                     ><i class="fa fa-google"></i
                    ></a>
                  <a
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