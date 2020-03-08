<?php
include("ConnDb.php");
session_start();
$table=$_SESSION['name'];
echo($table);
$sql="UPDATE `orders` SET `status` = '1' WHERE `orders`.`tableName` = '$table' AND  `orders`.`status`= '0' ";
if(mysqli_query($conn,$sql))
{
    header('location:cart.php');
    
}
else
{
    echo("ERROR");
}

?>