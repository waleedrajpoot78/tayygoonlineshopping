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

$sql="delete from customer where id='$ID' ";

if (mysqli_query ($conn,$sql))
header ("location:admin_dash.html")


?>