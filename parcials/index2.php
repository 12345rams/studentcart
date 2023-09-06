<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    include '../header2.php';

$email=$_SESSION['email'];
?>
<?php
  echo '<script src="../static/chat.js"></script>';
  echo '<script src="../static/responses.js"></script>';
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>studentcart</title>';
echo '<link rel="stylesheet" href="/index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Lexend:wght@500&family=Signika:wght@700&display=swap" rel="stylesheet">';
echo '</head>';
echo '';
echo '</head>';
echo '<style>';
echo '';
echo '.topnav{';
echo 'font-size: 35px;';
echo '}';
echo '.container8{';
echo '';
echo 'margin: 10px;';
echo 'padding: 10px;';
echo 'width: 100%;';
echo '';
echo '}';
echo '.ia{';
echo 'width: 14%;';
echo 'height: 14%;';

echo '}';
echo '.n{
  
    font-family: "Poppins", sans-serif;;
size:10px;';
echo 'text-align: center;';
echo 'color: red;
background-color:aqua;
display: block;';
echo 'align-items: center;';
echo '}';
echo '.container9{';
echo 'width: 90%;';
echo 'margin: 10px;';
echo '';
echo 'border: 5px ;';
echo 'background-color: rgb(23, 236, 236);';
echo '}';
echo '.p{';
echo 'font-size: 25px;
';
echo '';
echo 'font-family: " UI", Tahoma, Geneva, Verdana, sans-serif;';
echo 'color: rgb(6, 43, 255);
margin:10px;';
echo 'text-align: center;';
echo '}';
echo '.i{';
echo 'font-size: 120%;';
echo 'background-color: rgb(248, 250, 254);
margin:10px;';
echo '';
echo '}';
echo '.b{';
echo 'font-size: 23px;';
echo 'color: orangered;
margin:10px;';
echo '';
echo '}';
echo '</style>
<style>

        .con {
          width: 300px;
          display: flex;
          border-radius: 10px;
          background-color: white;
          align-items: center;
         left:0px;
          margin-bottom: 30px;
          justify-content: center;
          align-self: start;
          box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
          display: flex;
          margin-right:50px;
      }
        div.con {
            float:left;
         
        }
        div.con a{
            float:left;
            width:200px;
         
        }
img.img {
            align-items: center;
            margin-left: 2%;
            height: 100px;
        }

        .nm {
            text-decoration: none;
            font-family: "Lexend, sans-serif;
            align-items: center;
        }

     

   
#io{
  font-family: "Lexend, sans-serif;
  font-size:14px;

}
img.img2{

    width:120px;
    margin-left:10px;
   }
   .rate{
  margin-left:10px;
  
  font-family: Signika, sans-serif;

   }
        .box2{
            background: linear-gradient(to right, gold, darkorange);
            color: rgb(62, 62, 236);
            margin-top:10px;
            ;
            margin-left: 100px;
            margin-right: 20px;
            ;
            --width: 100px;
            --height: calc(var(--width) / 3);
            width: var(--width);
            height: var(--height);
            text-align: center;
            line-height: var(--height);
            font-size: calc(var(--height) / 2.5);
            font-family: sans-serif;
            letter-spacing: 0.2em;
            border: 1px solid darkgoldenrod;
            border-radius: 2em;
            transform: perspective(500px) rotateY(-15deg);
            text-shadow: 6px 3px 2px rgba(0, 0, 0, 0.2);
            box-shadow: 2px 0 0 5px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
            position: relative;
            overflow: hidden;
            float:right;

        }

        .box2:hover {
            transform: perspective(500px) rotateY(15deg);
            text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
            box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .box2::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, transparent, white, transparent);
            left: -100%;
            transition: 0.5s;
        }

        .box2:hover::before {
            left: 100%;
        }
        @media only screen and (min-width: 600px){
           div.con{
            margin-left: 100px;
             width: 200px;
             float:left;

   }
          @media only screen and (max-width: 600px){
          div.con{
           display:flex;
             margin-left:20px;
               float:left;



}
p{

}
</style>

';
echo '<p class="n">Select any of category of product  and after purchage the product  send the screenshot of payment  with order detail and get instant commision upto 10% ! </p>';
echo '<div class="container8">';
echo '';
echo '';
echo '';
echo '
<div class="con">
   <a href="./book.php">
    <div class="box2">Click</div>
    <img class="img2" src="../images/Fashion related (7).png" width="30% " hight="20%">
  </a>
</div>

<div class="con">
<a href="./mobile.php">
    <div class="box2">Click</div>
    <img class="img2" src="../images/Fashion related (11).png" width="30% " hight="20%">
  
</a>

</div>
<div class="con">
<a href="./more.php">
    <div class="box2">Click</div>
    <img class="img2" src="../images/Fashion related (5).png" width="30% " hight="15%">
  </a>

</div>
<div class="con">
<a href="./furniture.php">
    <div class="box2">Click</div>
    <img class="img2" src="../images/Fashion related (6).png" width="30% " hight="15%">
    <p></button></p>
</a></div>



<div class="con">
<a href="./laptop.php">
    <div class="box2">Click</div>
    <img class="img2" src="../images/Fashion related (9).png" width="30% " hight="15%">
 </a>
</div>




</div>
</div>
</div>
</div>
</div>


';
?>

    
<?php
include '../header2.php';
    }'}';
?>