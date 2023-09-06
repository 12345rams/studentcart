
<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    include '../header.php';

    echo '<script src="../static/chat.js"></script>';
    echo '<script src="../static/responses.js"></script>';
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lexend:wght@500&family=Signika+Negative:wght@300&family=Signika:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Poppins:wght@200&display=swap" rel="stylesheet">
<body>
    <style>
    .con4 {
   width:100%;
        display: flex;
        border-radius: 10px;
        background-color: white;
        align-items: center;

        margin-bottom: 30px;
        justify-content: center;
        align-self: start;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        display: flex;
        
        margin-top: 0px;
    }

    div.con4 {
        float: left;

    }
.conb{
    background-image: linear-gradient(to right, #fc5c7d, #6a82fb);
    font-size: 20px;
    color: white;
 font-size:18px;
    margin-top:0px;
    padding:20px 20px;
   width:100%;
font-family: Signika Negative, sans-serif;

font-family: "Poppins", sans-serif;

}
#t{
    color:black;
    font-size: x-large;
    
}
.link{
color:purple;
}
    </style>
  


<div class="conb">
<p id="t">you can contact to  our team through the mobile call ,facebook ,istagram ,watsapp,Email.our team give response imedeately</p>
  
    <p>watsapp No:7754847571</p>
    <p>watsapp No:8770335189</p>
    <div>
  <a class="link"href="https://www.facebook.com/profile.php?id=100090642606472&mibextid=ZbWKwL">click for facebook link</a>
  </div>
 
     
  <p>Here you buy sell product</p>
  <p> if any query Call our support team they tell you everything</p>
    <p>About us</p>
    <p>Basically we provide a plateform to sell and buy product of your fellow student at a minimal cost </p>
    <p>Thanks for contact us</p>

</div>
</body>
</html>';

?>
<?php
include '../header2.php';
}
else
header("Location:./login.php");
?>
