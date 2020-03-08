<?php
include("ConnDb.php");
session_start();
$table=$_SESSION['name'];
$id=$_GET['id'];
$cost=$_GET['cost'];
echo($cost);
$qry="SELECT * FROM food WHERE id='$id' ";
$result = mysqli_query($conn,$qry) or die( mysqli_error($conn));
$check = mysqli_fetch_array($result);
$food=$check['food'];
$cost=$check['cost'];
$sql="INSERT INTO orders (tableName , item , cost ) VALUES('$table','$food','$cost') ";
//  $result=mysqli_query($_conn,$_qry) or die( mysqli_error($conn)


 if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);

   header('location:breakfast.php');
   
} 
else
 {
   // header('location:apply_leave.php');
   echo("wrong");
}

?>