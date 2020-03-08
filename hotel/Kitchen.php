<?php
include("ConnDb.php");
session_start();
$name=$_SESSION['name'];
$qry="SELECT * FROM orders WHERE status='1' ORDER BY tableName ";
$result = mysqli_query($conn,$qry) or die( mysqli_error($conn));
$details=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 6; URL=$url");
?>
 



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php include('header_kitchen.php');?>
<div>
 <table class="responsive-table centered highlight" >
    <thead>
    <tr>
    <th> TableName </th>
    <th> Items </th>
    <th>status</th>
    </tr>
    </thead>
<br>
<?php
 foreach($details as $detail):
?>         
    <tbody>
    <tr>
    <td> <?php echo $detail['tableName']; ?></td>
    <td> <?php echo $detail['item']; ?></td>
    <td><a href="deliver.php?id=<?php echo $detail['id']?>">Deliver</a></td>
    </tr>
    </tbody>
<?php
    endforeach; 
?> 

</table>
 </div>  
    
</body>
</html>
