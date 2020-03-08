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
   header("Refresh: 10; URL=$url");
?>
 



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script   src="https://code.jquery.com/jquery-2.2.3.js"   
    integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   
    crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
   var limit = 5*60*100; // the time limit (in milliseconds) for the disable function
   var timer = setTimeout(disableMyButton, limit);

   function disableMyButton(){
      $('#myButton').prop('disabled', true);
      $("#statusMsg").text("Disabling before page refresh");
      localStorage.setItem("isMyButtonDisabled", "true");
   }

   if(localStorage.getItem("isMyButtonDisabled") == "true"){
     $("#statusMsg").text("Disabling after page refresh");
     $('#myButton').prop('disabled', true);
     window.clearTimeout(timer);
   }
});
</script> -->
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




<!-- 

<input type = "button" id= "myButton" value= "Click me" />
<p id="statusMsg" >  </p> -->
</body>
</html>