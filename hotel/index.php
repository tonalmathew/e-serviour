<?php

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
    


<?php include('header_kitchen.php');?>



 
<div class="container" style="margin-top: 150px;">
  <div class="row ">
    <form class="col s12" action="CheckLogin.php">
    
      <div class="card">
      <div class="card-content">
        <span class="card-title center">Login</span>
       
          <div class="row">
            <div class="input-field">
              <input  id="first_name" type="text" name="UserName" class="validate">
              <label for="first_name">UserName</label>
            </div>
            
          </div>
          
          <div class="row">
            <div class="input-field">
              <input id="password" type="text" class="validate"  name="Password">
              <label for="password">pass</label>
            </div>
          </div>
         
          <div class="card-action ">
            <!-- <a href="#">forget password?</a> -->
<input type="submit"class="btn right">

            <!-- <a href="#" class="btn right">Submit</a> -->
          </div>
         
        
      </div>
      

    </div>
  </form>

</body>
</html>