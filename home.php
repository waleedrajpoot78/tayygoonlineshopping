
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
<?php
if($_SESSION["name"]) {
?>
 <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid w-100 ml-lg-5">
      <a href="home.html"><img class="nav-img" src="WhatsApp Image 2022-12-22 at 8.15.54 PM.jpeg" alt="" >
       
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll" style="position: relative; left: 400px;">
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
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="https://images.unsplash.com/photo-1580657018950-c7f7d6a6d990?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="cor-img w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Fall Summer Clearance</h5>
            <h3 class="title-hero-19">Enjoy The Season Sale</h3>
            <p>Final Clearance: Take 20% off 'Sale Must-Haves'</p>
            <a href="products.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fa fa-arrow-right ms-lg-3 ms-2"></i></a>
          </div>
        </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="cor-img w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Fall Summer Clearance</h5>
              <h3 class="title-hero-19">Enjoy The Season Sale</h3>
              <p>Final Clearance: Take 20% off 'Sale Must-Haves'</p>
              <a href="products.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fa fa-arrow-right ms-lg-3 ms-2"></i></a>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="https://www.westend61.de/images/0001385151pw/crop-view-of-man-carrying-shopping-bags-DIGF11990.jpg" class="cor-img w-100"  alt="...">
            <div class="carousel-caption d-none d-md-block text-muted">
              <h5>Fall Summer Clearance</h5>
              <h3 class="title-hero-19">Enjoy The Season Sale</h3>
              <p>Final Clearance: Take 20% off 'Sale Must-Haves'</p>
              <a href="products.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fa fa-arrow-right ms-lg-3 ms-2"></i></a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </section><div class="container-fluid text-center">
      <h1 class="mt-2 mb-3">New Arrivals</h1>
  <div class="row pb-5 mb-4">
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
      <!-- Card-->
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0">
          <a href="dash.php"><img src="https://i.pinimg.com/564x/13/07/45/130745882ed0b3e1399cb03add1f48d7.jpg" alt="" class="w-100 card-img-top">
          </a>
           <div class="p-4">
            <h5 class="mb-0">Casual Pent Shirt</h5>
            <p class="small text-muted">Category</p>
            <a href="dash.php"><button class="butn">Shop now</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
      <!-- Card-->
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0">
          <a href="dash.php"><img src="https://i.pinimg.com/564x/b3/bc/4e/b3bc4eaab08900bc28a709cfa04e64ea.jpg" alt="" class="w-100 card-img-top">
          </a>
          <div class="p-4">
            <h5 class="mb-0">Men's Fashion</h5>
            <p class="small text-muted">Category</p>
            <a href="dash.php"><button class="butn">Shop now</button></a>

          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
      <!-- Card-->
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0">
          <a href="dash.php"><img src="https://i.pinimg.com/564x/43/d3/b2/43d3b286fa87eff2975467970a3ceb2f.jpg" alt="" class="w-100 card-img-top">
          </a>
          <div class="p-4">
            <h5 class="mb-0">Coat Outfits</h5>
            <p class="small text-muted">Category</p>
            <a href="dash.php"><button class="butn">Shop now</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
      <!-- Card-->
      <div class="card shadow-sm border-0 rounded">
        <div class="card-body p-0">
          <a href="dash.php"> <img src="https://i.pinimg.com/564x/2e/a4/3b/2ea43b3a8341c495a3351bb45986743d.jpg" alt="" class="w-100 card-img-top">
          </a>
          <div class="p-4">
            <h5 class="mb-0">Men's Jackets</h5>
            <p class="small text-muted">Category</p>
            <a href="dash.php"><button class="butn">Shop now</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <section class="best-sellers">
          <div class="text-center container-fluid py-5">
            <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>
        
            <div class="row">
              <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                  <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                    data-mdb-ripple-color="light">
                    <img src="https://i.pinimg.com/564x/dd/f1/e1/ddf1e1c71a389d314a82e89d1780ca6b.jpg"
                      class="w-100" />
                    <a href="#!">
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="" class="cat">
                      <h5 class="card-title mb-3">Full seleeve casual Shirt</h5>
                    </a>
                    <a href="" class="cat">
                      <p>Category</p>
                    </a>
                    <a href="dash.php"><button class="butn">Shop now</button></a>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                    data-mdb-ripple-color="light">
                    <img src="https://i.pinimg.com/564x/28/7c/e3/287ce3fff2c49af8fff150ab4e7866d1.jpg"
                      class="w-100" />
                    <a href="#!">
                     
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="" class="cat">
                      <h5 class="card-title mb-3">Half seleeve casual shirt</h5>
                    </a>
                    <a href="" class="cat">
                      <p>Category</p>
                    </a>
                    <a href="dash.php"><button class="butn">Shop now</button></a>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <img src="https://i.pinimg.com/564x/c7/71/38/c771389b42a8205dc2252632dfa33239.jpg"
                      class="w-100" />
                    <a href="#!">
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="" class="cat">
                      <h5 class="card-title mb-3">Full seleeve t-shirt</h5>
                    </a>
                    <a href="" class="cat">
                      <p>Category</p>
                    </a>
                    <a href="dash.php"><button class="butn">Shop now</button></a>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="row">
              <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                  <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <img src="https://i.pinimg.com/564x/06/38/c9/0638c9b27582457e1801ced301a99c9a.jpg"
                      class="w-100" />
                    <a href="#!">
                      <div class="mask">
                        <div class="d-flex justify-content-start align-items-end h-100">
                          <h5>
                          </h5>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="" class="cat">
                      <h5 class="card-title mb-3">Casual pant</h5>
                    </a>
                    <a href="" class="cat">
                      <p>Category</p>
                    </a>
                    <a href="dash.php"><button class="butn">Shop now</button></a>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                    data-mdb-ripple-color="light">
                    <img src="https://static-01.daraz.pk/p/1a1487ffc4630bafc9a9d1ed40e85a6c.jpg"
                      class="w-100" />
                    <a href="#!">
                      <div class="mask">
                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="" class="cat">
                      <h5 class="card-title mb-3">Jeans Pant</h5>
                    </a>
                    <a href="" class="cat">
                      <p>Category</p>
                    </a>
                    <a href="dash.php"><button class="butn">Shop now</button></a>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                    <img src="https://cdn03.ciceksepeti.com/cicek/kcm12689554-2/L/4570-renato-slimfit-pantolon-kcm12689554-2-5b545a1537ce4d92b3d0120d84eb633a.jpg"
                      class="w-100" />
                    <a href="#!">
                      <div class="mask">
                        <div class="d-flex justify-content-start align-items-end h-100">
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="" class="cat">
                      <h5 class="card-title mb-3">Renato slim fit</h5>
                    </a>
                    <a href="" class="cat">
                      <p>Category</p>
                    </a>
                    <a href="dash.php"><button class="butn">Shop now</button></a>
                  
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
<?php
}else echo "<h1>Please login first .</h1>";
?>
    </body>
</html>