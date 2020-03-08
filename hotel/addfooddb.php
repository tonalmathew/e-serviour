<?php



include("ConnDb.php");

$foodname=$_GET["foodname"];

$status=$_GET['r1'];
$cost=$_GET["cost"];

$sql="INSERT INTO `food` (`food`, `status`, `cost`) VALUES ('$foodname', '$status', '$cost');";
if(mysqli_query($conn,$sql))
{
    header('location:Admin.php');
    
}
else
{
    echo("ERROR");
}


?>