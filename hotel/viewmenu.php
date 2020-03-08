<?php

include("ConnDb.php");
$qry="SELECT * FROM food "; 
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






<?php include('header_admin.php');?>







<div>
 <table class="responsive-table centered highlight" >
    <thead>
    <tr>
    <th> items </th>
    
    <th>type</th>
    <th> price </th>
    <th>Edit</th>
    </tr>
    </thead>
<br>
<?php
 foreach($details as $detail):
?>         
    <tbody>
    <tr>
    <td> <?php echo $detail['food']; ?></td>
    <td> <?php echo $detail['status']; ?></td>
    <td> <?php echo $detail['cost']; ?></td>
    <td><a href="editfood.php?id=<?php echo $detail['id'] ?>">edit</a></td>

   

    </tr>
    </tbody>
<?php
    endforeach; 
?> 

</table>
 </div>  
    
</body>
</html>