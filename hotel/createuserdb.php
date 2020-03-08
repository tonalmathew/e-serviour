<?php

include("ConnDb.php");

$UserName=$_GET["tablename"];
$Password=$_GET["Password"];

$sql="INSERT INTO `logins` (`UserName`, `UserPassword`, `Status`) VALUES ('$UserName', '$Password', '3')";
if(mysqli_query($conn,$sql))
{
    header('location:Admin.php');
    
}
else
{
    echo("ERROR");
}


?>