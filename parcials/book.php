<?php
session_start();
include '../header.php';

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
<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Poppins:ital,wght@0,200;1,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
    .material-symbols-outlined {
      font-variation-settings:
      "FILL" 0,
      "wght" 600,
      "GRAD" 0,
      "opsz" 48,
    
    }
    .material-symbols-outlined{
        margin-top: 20px;
    }
    </style>
<body>
    <style>
    
        .con {
            width: 270px;
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
            margin-right:10px;
            padding-top: 5px;
           height: 150px;
           margin-left: 10px;
           padding-bottom: 10px;
        }
        
        div.con {
            float:left;
         
        }
        .con8 {
            width: 270px;
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
            margin-right:10px;
            padding-top: 5px;
           height:300px;
           margin-left: 10px;
           padding-bottom: 10px;
        }
        
        div.con8{
            float:left;
         
        }
img.img {
            align-items: center;
            margin-left: 20px;
            height: 180px;
            margin-top: 20px;
            padding-bottom: 10px;
        }

        .nm {
            text-decoration: none;
            font-family: "Lexend, sans-serif";
            align-items: center;
        }

     

   
#io{
  font-family: "Lexend, sans-serif";
  font-size:14px;

}
        .box {
            background: linear-gradient(to right, gold, darkorange);
            color: rgb(62, 62, 236);
            margin-bottom: -30px;
            margin-left: 70px;
            margin-right: 20px;
            margin-bottom: -30px;
         
            ;
          
            ;
            --width: 70px;
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
        }

        .box:hover {
            transform: perspective(500px) rotateY(15deg);
            text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
            box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .box::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, transparent, white, transparent);
            left: -100%;
            transition: 0.5s;
        }

        .box:hover::before {
            left: 100%;
        }
        .box2 {
            background:Black;
            color: white;
            margin-bottom: 30px;
            margin-left: 70px;
            margin-right: 20px;
            margin-bottom: 30px;
         
            ;
          
            ;
            --width: 70px;
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
            margin-top:-60px;
        }

        .box2:hover {
            transform: perspective(500px) rotateY(15deg);
            text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
            box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
        }

   
        @media only screen and (min-width: 600px){
           div.con{
         
             width: 250px;

                      }
                    }
  @media only screen and (max-width: 600px){
  div.smc-button{
     display:none;
    }
}
   @media only screen and (min-width: 600px){
          div.con{
display:flex;
margin-left:20px;
           float:left;
          }



}
        .img{
padding-top: 20px;

        }
        #v{
            margin-top: -2px;
            align-items: center;
            margin-bottom: -10px;
            margin-left: 30px;
            color: rgb(247, 12, 255);
      
            font-family: "Carter One", cursive;

        }
  .search{
    margin-top: 10px;
  }
    </style>
        <i class="material-symbols-outlined">search</i>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search the items....">

<ul id="myUL">

<li><a href="./detailofbook.php" class="con8">Computer
<div class="box" >More Info</div>
<img class="img" src="../images3/6 (10).jpg" width="80% " height="20%">
<p></button></p><p id="v"> Price Rs600</p>
<p id="v"> Rent Rs30 per day</p>
<br><p id="v"> 9569493943</p>
</a><div class="box2">buy/rent</div>
</li>
                <li><a href="./detailofbook.php" class="con8"> Maths
                    <div class="box" >More Info</div>
                    <img class="img" src="../images3/6 (1).jpg" width="80% " height="40%">
                    <p></button></p><p id="v"> Price Rs600</p>
                    <p id="v"> Rent not available</p>

                    <br><p id="v"> 9569493943</p>
                    </a><div class="box2">buy/rent</div>
                </li>
                   
       
                   
                <li><a href="./detailofbook.php" class="con8">Maths
                    <div class="box" >More Info</div>
                    <img class="img" src="../images3/6 (4).jpg" width="80% " height="40%">
                    <p></button></p><p id="v"> Price Rs60</p>
                    <p id="v"> Rent not available</p>
                    <br><p id="v"> 9569493943</p>
                    </a><div class="box2">buy/rent</div>
                </li>
                   
                <li><a href="./detailofbook.php" class="con8">Maths
                    <div class="box" >More Info</div>
                    <img class="img" src="../images3/6 (1).webp" width="80% " height="20%">
                    <p></button></p><p id="v"> Price Rs60</p>
                    <br><p id="v"> 9569493943</p>
                    </a><p href="./buy.php"><div class="box2">buy/rent</div></p>
                </li>
                <li><a href="./detailofbook.php" class="con8">Physics
                <div class="box" >More Info</div>
                <img class="img" src="../images3/6 (4).jpg" width="80% " height="20%">
                <p></button></p><p id="v"> Price Rs60</p>
                <p id="v"> Rent Rs400 per month</p>
                <br><p id="v"> 9569493943</p>
                </a><div class="box2">buy/rent</div>
            </li>
            <li><a href="./detailofbook.php" class="con8">physics
            <div class="box" >More Info</div>
            <img class="img" src="../images3/6 (5).jpg" width="80% " height="20%">
            <p></button></p><p id="v"> Price Rs60</p>
            <p id="v"> Rent Rs400 per month</p>
            <br><p id="v"> 9569493943</p>
            </a><div class="box2">buy/rent</div>
        </li>
        <li><a href="./detailofbook.php" class="con8">Maths
        <div class="box" >More Info</div>
        <img class="img" src="../images3/6 (6).jpg" width="80% " height="20%">
        <p></button></p><p id="v"> Price Rs60</p>
        <p id="v"> Rent Rs400 per month</p>
        <br><p id="v"> 9569493943</p>
        </a><div class="box2">buy/rent</div>
    </li>
    <li><a href="./detailofbook.php" class="con8">Maths
    <div class="box" >More Info</div>
    <img class="img" src="../images3/6 (7).jpg" width="80% " height="20%">
    <p></button></p><p id="v"> Price Rs600</p>
    <p id="v"> Rent Rs40 per day</p>
    <br><p id="v"> 9569493943</p>
    </a><div class="box2">buy/rent</div>
</li>
<li><a href="./detailofbook.php" class="con8">Maths
<div class="box" >More Info</div>
<img class="img" src="../images3/6 (8).jpg" width="80% " height="20%">
<p></button></p><p id="v"> Price Rs600</p>
<p id="v"> Rent Rs30 per day</p>
<br><p id="v"> 9569493943</p>
</a><div class="box2">buy/rent</div>
</li>
<li><a href="./detailofbook.php" class="con8">Maths
<div class="box" >More Info</div>
<img class="img" src="../images3/6 (9).jpg" width="80% " height="20%">
<p></button></p><p id="v"> Price Rs600</p>
<p id="v"> Rent Rs30 per month</p>
<br><p id="v"> 9569493943</p>
</a><div class="box2">buy/rent</div>
</li>

                   
<li><a href="./detailofbook.php" class="con8">Maths
<div class="box" >More Info</div>
<img class="img" src="../images3/6 (1).webp" width="80% " height="20%">
<p></button></p><p id="v"> Price Rs60</p>
<br><p id="v"> 9569493943</p>
</a><p href="./buy.php"><div class="box2">buy/rent</div></p>
</li>
<li><a href="./detailofbook.php" class="con8">Physics
<div class="box" >More Info</div>
<img class="img" src="../images3/6 (4).jpg" width="80% " height="20%">
<p></button></p><p id="v"> Price Rs60</p>
<p id="v"> Rent Rs400 per month</p>
<br><p id="v"> 9569493943</p>
</a><div class="box2">buy/rent</div>
</li>
<li><a href="./detailofbook.php" class="con8">Physics
<div class="box" >More Info</div>
<img class="img" src="../images3/6 (5).jpg" width="80% " height="20%">
<p></button></p><p id="v"> Price Rs60</p>
<p id="v"> Rent Rs400 per month</p>
<br><p id="v"> 9569493943</p>
</a><div class="box2">buy/rent</div>
</li>
              </ul>
              

</body>
<style>
#myInput {
    background-color:rgb(152, 220, 249); /* Add a search icon to input 
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */

    border: 1px solid #090909; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
    width: 80%;
    margin-top: 5px;
    border-radius: 10px;
  }
  
  #myUL {
    /* Remove default list styling */
    list-style-type: none;
    padding: 0;
  margin: 0;
 
  }
  
  #myUL li a {
    border: 1px solid #ffffff; /* Add a border to all links */
   
    background-color: #ffffff; /* Grey background color */
    padding: 1px; /* Add some padding */
    text-decoration: none; /* Remove default text underline */
    font-size: 15px; /* Increase the font-size */
    color: black; /* Add a black text color */
    display: block; /* Make it into a block element to fill the whole list */
    width:110px;
    height: 350px;
    color: rgb(2, 236, 25);
    
    font-family: "Carter One", cursive;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  width:160px;
  margin-right: 5px;
  margin-top: 20px;

  }
  #myUL li{
    margin-left: 20px;
    float: left;margin-top: 10px;
  }
  #myUL li a:hover:not(.header) {
    background-color: #eee; /* Add a hover effect to all links, except for headers */
  }
  a#b{
    padding: 1px;
    color: rgb(60, 238, 6);
  }
</style>';
?>
<script>
    function myFunction() {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById('myUL');
      li = ul.getElementsByTagName('li');
    
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        
        }
      }
    }
    </script>
</html>



