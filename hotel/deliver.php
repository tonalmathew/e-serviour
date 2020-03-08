<?php
include("ConnDb.php");
$id=$_GET['id'];
$sql="UPDATE `orders` SET `status` = '5' WHERE `orders`.`id` = $id ";
if(mysqli_query($conn,$sql))
{
    header('location:kitchen.php');
    
}

else
{
    echo("ERROR");
}

?> 