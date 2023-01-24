<?php
session_start();
require_once('config/db.php');
if(!$_SESSION['name']){
  header ("location:admin.php");
}
    $a=$_GET["ID"];
if(!$conn)
echo 'connection not established';
$sql="select * from product where p_id='$a'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    $name=$row['p_name'];
    $desc=$row['p_desc'];
    $size=$row['size'];
    $price=$row['p_price'];
    echo $name.$desc.$size,$price;
}

if(isset($_POST['update']))
{
    $conn = mysqli_connect("localhost","root","","taygoo");
if(!$conn)
echo 'connection not established';
$image = $_FILES['image']['name'];
$image_size = $_FILES['image']['size'];
$image_tmp_name = $_FILES['image']['tmp_name'];
$image_folder = 'uploaded_img/'.$image;
$sql="update product set p_name='".$_POST['name']."' , p_desc='".$_POST['desc']."' , size='".$_POST['size']."',p_price='".$_POST['price']."', image='".$image."' where p_id='$a'";
if(mysqli_query($conn,$sql))
{
    
    echo 'record updated';
}
else
echo 'record not updated';  
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
                <h1 class="h3 mb-3 fw-normal">Insert Baby clothes</h1>
            </div>
                <div class="form-group mt-1">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $name?>" class="form-control"  placeholder="Enter Product name">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                <textarea name="desc" value="<?php echo $desc?>" id="" cols="30" rows="7"></textarea>
                        </div>
                <div class="form-group mt-1">
                    <label class="form-label">size</label>
                    <input type="text"value="<?php echo $size?>" name="size" class="form-control"  placeholder="Enter size">
                </div>
                <div class="form-group mt-1">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" value="<?php echo $price?>" class="form-control"  placeholder="enter price">

                </div>
                <div class="form-group">
                    <label class="form-label">Image</label>
                    <input name="image"  class="form-control" type="file" class="form-control">
                </div>
                <div class="w-100 text-center">
                    <input type="submit" name="update" class="w-75 mt-3 btn btn-lg btn-dark"  >
                <br>
            </div>
                </div>
            </form>
        </div>
           </body>
    <?php
}else echo "<h1>Please login first .</h1>";
?></html>