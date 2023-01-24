<?php
$conn=mysqli_connect("localhost","root","","taygoo");

$ID= $_GET['ID'];
if(!$conn)
{
    echo 'connection not established';
}
else
{
    echo 'Connection Established';
}

$sql="delete from product where p_id='$ID' ";

if (mysqli_query ($conn,$sql))
header ("location:b_c_view.php");
?>