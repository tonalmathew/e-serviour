<?php


include("ConnDb.php");

$id=$_GET['id'];

$sql = "SELECT * FROM food WHERE id = $id";

$result = mysqli_query($conn, $sql);

$item=mysqli_fetch_assoc($result);





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

  
<div class="container" style="margin-top: 150px;">
  <div class="row ">
    <form class="col s12" action="addfooddb.php">
    
      <div class="card">
      <div class="card-content">
        <span class="card-title center">ADD NEW FOOD ITEM</span>
       
          <div class="row">
            <div class="input-field">
              <input  id="first_name" type="text"  name="foodname" class="validate" value="<?php echo $item['food']?>">
              <label for="first_name">Item Name</label>
            </div>
            
          </div>
          
          <div class="row">
            <div class="input-field">
              <input id="text" type="text" class="validate"  name="cost" value="<?php echo $item['cost']?>">
              <label for="password">Cost</label>
            </div>
          </div>

          <p>
    <label>
      <input class="with-gap" name="r1" type="radio"  value="1" <?php if($item['status']=='1'){echo "CHECKED";}?>  />
      <span>Breakfast</span>
    </label>
  </p>
        
  
  <p>
    <label>
      <input class="with-gap" name="r1" type="radio"  value="2" <?php if($item['status']=='2'){echo "CHECKED";}?> />
      <span>Lunch</span>
    </label> 
  </p>
        
  
  <p>
    <label>
      <input class="with-gap" name="r1" type="radio"  value="3"  <?php if($item['status']=='3'){echo "CHECKED";}?>/>
      <span>Dinner</span>
    </label>
  </p>
        

         
          <div class="card-action ">
            <!-- <a href="#">forget password?</a> -->
<input type="submit"class="btn right">

            <!-- <a href="#" class="btn right">Submit</a> -->
          </div>
         
        
      </div>
      

    </div>
  </form>
   
  </div>
</div>
  
</body> 
</html>