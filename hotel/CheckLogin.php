<?php
include("ConnDb.php");
$UserName=$_GET["UserName"];
$Password=$_GET["Password"];
session_start();
$qry="SELECT * FROM logins WHERE UserName='$UserName' AND UserPassword= '$Password' ";
$result = mysqli_query($conn,$qry) or die( mysqli_error($conn));
$check = mysqli_fetch_array($result);
if(isset($check))
{
    $_SESSION['name']=$UserName;
    if($check['Status']==1)
    {
        header('location:Admin.php');
    }
   else if($check['Status']==2)
    {
        header('location:Kitchen.php');
    }
    else if($check['Status']==3)
    {
        header('location:main.php');//table.php
    }
}
else
{
    header('location:index.php');
}

?>

