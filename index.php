<?php
include 'header2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudentCart</title>
</head>
<style>
  body{
  background-attachment: fixed;
   background-image: url("./images3/online-shopping-digital-technology-with-icon-blue-background-ecommerce-online-store-marketing_252172-219.avif");
background-repeat:no-repeat;
background-size: cover;

  }
  .con{
  
    margin-top: 70px;
    text-align: center;
    justify-content: center;
  }
  .welcome{
 font-size: xxx-large;
 color: white;
 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  .sell{
 font-size: xx-large;
 color: whitesmoke;
 font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  } 
  .sell2{
 font-size: x-large;
 color: whitesmoke;
  } 
.btn{
  background-color: greenyellow;
  border: 5px solid  #8fde1a;
}
.btn:hover{
  background-color: #48ef06;
  border-color: greenyellow;
}
</style>
<body>
  <div class="con">
   <p href="" class="welcome">Welcome to Studentcart</p>
   <p class="sell2">Here  you can </p>
   <p class="sell">Sell Buy and Rent</p>
   <p class="sell">Get started</p>
   <a href="./parcials/signup.php"><button type="button" class="btn" >Signup</button></a>
   <a><button type="button" class="btn" href="./parcials/login.php">login</button></a>
 
  </div>
</body>
</html>