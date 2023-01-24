<?php
$conn=mysqli_connect("localhost","root","","taygoo");
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
       </nav>
</body>
</html>
<?php
if(!$conn)
{
    echo 'connection not established';
}
else
{
    echo 'Connection Established';
}
$ID= $_GET['ID'];
$sql= "delete from product where p_id='$ID'";
if (mysqli_query ($conn,$sql))
header('Location: c_c_view.php');
?>