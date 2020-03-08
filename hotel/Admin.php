<?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 6; URL=$url");
?>
<?php
include("ConnDb.php");
session_start();
$name=$_SESSION['name'];





$qry="SELECT DISTINCT tableName FROM orders WHERE status='5' ORDER BY tableName ";
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

<?php include('header_admin.php');?>


<div class="center row">


<div class="row">
<?php
 foreach($details as $detail):
?> 
      <div class="col s6">
      <h5><?php echo $detail['tableName']; ?></h5>
      </div>
      

    <?php
    endforeach; 
?> 


</div>







</table>

    </div>



</div>
   
</body>
</html>