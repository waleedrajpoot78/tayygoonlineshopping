<?php
session_start();
require_once('config/db.php');
if(!$_SESSION['name']){
  header ("location:admin.php");
}
if(isset($_POST['insert']))
{

    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $size=$_POST['size'];
    $cat=2;
    $price=$_POST['price'];
    $conn=mysqli_connect("localhost","root","","taygoo");
    $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

    if($conn)
    echo' connection is  establish ';

  $sql="insert into product(c_id,p_name,p_desc,size,p_price,image) values ('$cat','$name','$desc','$size','$price','$image')";

  if(mysqli_query($conn,$sql))
  {
    echo '<script type="text/javascript">';
    echo ' alert("JavaScript Alert Box by PHP")';
    echo '</script>';
    header('Location: c_clothes.html');
  }
  else
  {
    echo'record not insert';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        background-color: rgb(196, 190, 183);
    }
    .tab{
        width: 65%;
        margin-left: 170px;
        margin-top: 50px;
        border-color: black;
    }
    .tab tr td a button{
        border-radius: 15px;
        padding:2px 14px;
        color: cadetblue;
    }
    .navbar{
        background-color: rgb(224, 221, 221);
    }
</style>
    <title class="bold">Admin Dashboard</title>
</head>
<body>
<?php
if($_SESSION["name"]) {
?>
       <nav class="navbar navbar-expand-lg ">
           <div class="container-fluid text-center w-100">
               <a class="navbar-brand" href="admin-dash.html">Admin Panel</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                   data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                   aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="admin-dash.html">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="cust_del.php">Edit Customers</a>
                       </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                               edit Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="b_c_insert.php">Baby clothes</a></li>
                                <li><a class="dropdown-item" href="c_c_insert.php">Childrens clothes</a></li>
                                <li><a class="dropdown-item" href="m_c_insert.php">mens clothes</a></li>
                                <li><a class="dropdown-item" href="w_c_insert.php">Womenswear</a></li>

                            </ul>
                        </li>
                   </ul>
               </div>
            </div>
           <a name="" id="" class="btn btn-primary" href="alogout.php" role="button">logout</a>
       </nav>
       <div class="container mb-5">
        <div class="form-signin con bg-light">
            <form method="post" enctype="multipart/form-data">
                <div class="text-center">
                <h1 class="h3 mb-3 fw-normal">Insert Children clothes</h1>
            </div>
                <div class="form-group mt-1">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Product name">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                <textarea name="desc" id="" cols="30" rows="7"></textarea>
                        </div>
                <div class="form-group mt-1">
                    <label class="form-label">size</label>
                    <input type="text" name="size" class="form-control"  placeholder="Enter size">
                </div>
                <div class="form-group mt-1">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control"  placeholder="enter price">

                </div>
                <div class="form-group">
                    <label class="form-label">Image</label>
                    <input name="image" class="form-control" type="file" class="form-control">
                </div>
                <div class="w-100 text-center">
                    <input type="submit" name="insert" class="w-75 mt-3 btn btn-lg btn-dark"  >
                <br>
            </div>
                </div>
            </form>
        </div>
           </body>
    <?php
}else echo "<h1>Please login first .</h1>";
?></html>