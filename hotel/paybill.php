<?php 
include("ConnDb.php");
session_start();
$name=$_SESSION['name'];
$qry="DELETE FROM `orders` WHERE `orders`.`status` = '5' AND `orders`.`tableName` = '$name' ";
$result = mysqli_query($conn,$qry) or die( mysqli_error($conn));
$details=mysqli_fetch_all($result,MYSQLI_ASSOC);
session_destroy();
header('location:index.php');
?>