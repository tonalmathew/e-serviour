<?php
include("ConnDb.php");
session_start();
$name=$_SESSION['name'];
$qry="SELECT * FROM food ";
$result = mysqli_query($conn,$qry) or die( mysqli_error($conn));
$details=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div>
 <a href="cart.php">cart</a><br>
 <a href="bill.php">bill</a><br>
 <table class="responsive-table centered highlight" >
    <thead>
    <tr>
    <th> Items </th>
    <th> cost </th>
    <th> Oders </th>
    </tr>
    </thead>
<br>
<?php
 foreach($details as $detail):
?>         
    <tbody>
    <tr>
    <td> <?php echo $detail['food']; ?></td>
    <td> <?php echo $detail['cost']; ?></td>
    <td><a href="approveOrder.php?id=<?php echo $detail['id'] ?>">Order</a></td>
    </tr>
    </tbody>
<?php
    endforeach; 
?> 

</table>
 </div>  
 <div >
 </div> 
</body>
</html>