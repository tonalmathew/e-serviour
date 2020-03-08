<?php
include("ConnDb.php");
$id=$_GET['id'];
$sql="UPDATE `orders` SET `status` = '4' WHERE `orders`.`id` = $id ";
if(mysqli_query($conn,$sql))
{
    header('location:cart.php');
    
}

else
{
    echo("ERROR");
}

?>