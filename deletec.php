<?php
$conn=mysqli_connect("localhost","root","","taygoo");
if(!$conn)
{
    echo 'connection not established';
}
else
{
    echo 'Connection Established';
}
$ID= $_GET['ID'];
$sql= "delete from coat where id='$ID'";
if (mysqli_query ($conn,$sql))
header('Location:coat_view.php');
?>