<?php


include("ConnDb.php");

$foodname=$_POST["foodname"];

$status=$_POST['r1'];
$cost=$_POST["cost"];
$id=$_GET['id'];


$qry="UPDATE `food` SET `food` = '$foodname', `status` = '$status', `cost` = '$cost' WHERE `food`.`id` = $id";



if(mysqli_query($conn,$qry))
{
    header('location:Admin.php');
}
else{
    echo "query error";
}
 



?>



