<?php
include("ConnDb.php");
session_start();
$name=$_SESSION['name'];
$qry="SELECT * FROM orders WHERE status='5' AND tableName='$name' ";
$result = mysqli_query($conn,$qry) or die( mysqli_error($conn));
$details=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="../materialcss/material.html">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>user order</title>
</head>


<body>

<?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 6; URL=$url");
?>
<?php include('header_table.php');?>


    <div>
    <table class="responsive-table centered highlight" >
    <thead>
    <tr>
    <th> Items </th>
    <th> cost </th>
    </tr>
    </thead>
<br>
<?php
 foreach($details as $detail):
?>         
    <tbody>
    <tr>
    <td> <?php echo $detail['item']; ?></td>
    <td> <?php echo $detail['cost']; ?></td>

    </tr>
    </tbody>
<?php
    endforeach; 
?> 

</table>





<div class="row center">
      <div class="col s12"><?php
$total=0;
//$qry="SELECT cost FROM orders WHERE status=5 AND tableName='$name' ";
$sql = "SELECT cost FROM orders WHERE status=5 AND tableName='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $total=$total+ $row['cost'];
    }
} else {
    
}
// echo"Total amount =".$total;

?></div>
      <h4><?php echo "Total amount =".$total;?></h4>
    </div>





<div class="center row">
<a href="paymentmethods.php">PAYMENT METHODS</a>

</div>

    </div>
</body>
</html>