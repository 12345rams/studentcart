<?php
session_start();
include '_dbconnect.php';



echo '<script src="../static/chat.js"></script>';
echo '<script src="../static/responses.js"></script>';
// session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    include '../header.php';
   $email=$_SESSION['email'];

 
 $sql = "SELECT * FROM `signups`WHERE email='$email'"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
     $camount = $row['currentm'];
     $tm = $row['totalm'];
     $dm = $row['debitm'];
     $rm = $row['referm'];
     $if = $row['ifsccode'];
     $ai = $row['accountid'];
     $name = $row['name'];
$m=$row['Mobile no'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
$amount=$_POST['amount'];
$sql="UPDATE `signups` SET `amount`='$amount' WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlert = true;
              
                
                       }
}
 ?>
         <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext');


        .icon {
            display: inline-block;
            width: 1em;
            height: 1em;
            stroke-width: 0;
            stroke: currentColor;
            fill: currentColor;
        }
  


  
        .profile-card {
            width: 100%;
            height: auto;

            margin: auto;
            box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);
            background: #fff;
            border-radius: 12px;
            max-width: 700px;
            position: relative;
            background-image: linear-gradient(-20deg, #6944ff 100% #ff2846 0%, );

        }

        .profile-card.active .profile-card__cnt {
            filter: blur(6px);
            margin-top: 30px;
        }

        .profile-card.active .profile-card-message,
        .profile-card.active .profile-card__overlay {
            opacity: 1;
            pointer-events: auto;
            transition-delay: 0.1s;
        }

        .profile-card.active .profile-card-form {
            transform: none;
            transition-delay: 0.1s;
        }

        .profile-card__img {
            width: 150px;
            height: 150px;
            margin-top: 70px;
            margin-left: auto;
            margin-right: auto;
            transform: translateY(-50%);
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            z-index: 4;
            box-shadow: 0px 5px 50px 0px #6c44fc, 0px 0px 0px 7px rgba(107, 74, 255, 0.5);
        }

        @media screen and (max-width: 576px) {
            .profile-card__img {
                width: 120px;
                height: 120px;
            }
        }

        .profile-card__img img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .profile-card__cnt {
            margin-top: -35px;
            text-align: center;
            padding: 0 20px;
            padding-bottom: 40px;
            transition: all 0.3s;
        }

        .profile-card__name {
            font-weight: 700;
            font-size: 24px;
            color: #6944ff;
            margin-top: 50px;
            margin-bottom: 15px;
        }

        .profile-card__txt {
            font-size: 18px;
            font-weight: 500;
            color: #324e63;
            margin-bottom: 15px;
        }

        .profile-card__txt strong {
            font-weight: 700;
        }

        .profile-card-loc {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
        }

        .profile-card-loc__icon {
            display: inline-flex;
            font-size: 27px;
            margin-right: 10px;
        }

        .profile-card-inf {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: flex-start;
            margin-top: 35px;
        }

        .profile-card-inf__item {
            padding: 10px 35px;
            min-width: 150px;
        }

        @media screen and (max-width: 768px) {
            .profile-card-inf__item {
                padding: 10px 20px;
                min-width: 120px;
            }
        }

        .profile-card-inf__title {
            font-weight: 700;
            font-size: 27px;
            color: #324e63;
        }

        .profile-card-inf__txt {
            font-weight: 500;
            margin-top: 7px;
        }

        .profile-card-social {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            left: 5px;
        }

        .profile-card-social__item {
            display: inline-flex;
            width: 55px;
            height: 55px;
            margin: 15px;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: #405de6;
            box-shadow: 0px 7px 30px rgba(43, 98, 169, 0.5);
            position: relative;
            font-size: 21px;
            flex-shrink: 0;
            transition: all 0.3s;
            left: 5px;
        }

        @media screen and (max-width: 768px) {
            .profile-card-social__item {
                width: 50px;
                height: 50px;
                margin: 10px;
            }
        }

        @media screen and (min-width: 768px) {
            .profile-card-social__item:hover {
                transform: scale(1.2);
            }
        }

        .profile-card-social .icon-font {
            display: inline-flex;
        }

        .profile-card-ctr {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }

        @media screen and (max-width: 576px) {
            .profile-card-ctr {
                flex-wrap: wrap;
            }
        }

        .profile-card__button {
            background: none;
            border: none;
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
            font-size: 19px;
            margin: 15px 35px;
            padding: 15px 40px;
            min-width: 201px;
            border-radius: 50px;
            min-height: 55px;
            color: #fff;
            cursor: pointer;
            backface-visibility: hidden;
            transition: all 0.3s;
        }

        @media screen and (max-width: 768px) {
            .profile-card__button {
                min-width: 170px;
                margin: 15px 25px;
            }
        }

        @media screen and (max-width: 576px) {
            .profile-card__button {
                min-width: inherit;
                margin: 0;
                margin-bottom: 16px;
                width: 100%;
                max-width: 300px;
            }

            .profile-card__button:last-child {
                margin-bottom: 0;
            }
        }

        .profile-card__button:focus {
            outline: none !important;
        }

        @media screen and (min-width: 768px) {
            .profile-card__button:hover {
                transform: translateY(-5px);
            }
        }

        .profile-card__button:first-child {
            margin-left: 0;
        }

        .profile-card__button:last-child {
            margin-right: 0;
        }

        .profile-card__button.button--blue {
            background: linear-gradient(45deg, #1da1f2, #0e71c8);
            box-shadow: 0px 4px 30px rgba(19, 127, 212, 0.4);
        }

        .profile-card__button.button--blue:hover {
            box-shadow: 0px 7px 30px rgba(19, 127, 212, 0.75);
        }

        .profile-card__button.button--orange {
            background: linear-gradient(45deg, #d5135a, #f05924);
            box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.35);
        }

        .profile-card__button.button--orange:hover {
            box-shadow: 0px 7px 30px rgba(223, 45, 70, 0.75);
        }

        .profile-card__button.button--gray {
            box-shadow: none;
            background: #dcdcdc;
            color: #142029;
        }

        .profile-card-message {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            padding-top: 130px;
            padding-bottom: 100px;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s;
        }

        .profile-card-form {
            box-shadow: 0 4px 30px rgba(15, 22, 56, 0.35);
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
            height: 100%;
            background: #fff;
            border-radius: 10px;
            padding: 35px;
            transform: scale(0.8);
            position: relative;
            z-index: 3;
            transition: all 0.3s;
        }

        @media screen and (max-width: 768px) {
            .profile-card-form {
                max-width: 90%;
                height: auto;
            }
        }

        @media screen and (max-width: 576px) {
            .profile-card-form {
                padding: 20px;
            }
        }

        .profile-card-form__bottom {
            justify-content: space-between;
            display: flex;
        }

        @media screen and (max-width: 576px) {
            .profile-card-form__bottom {
                flex-wrap: wrap;
            }
        }

        .profile-card textarea {
            width: 100%;
            resize: none;
            height: 210px;
            margin-bottom: 20px;
            border: 2px solid #dcdcdc;
            border-radius: 10px;
            padding: 15px 20px;
            color: #324e63;
            font-weight: 500;
            font-family: 'Quicksand', sans-serif;
            outline: none;
            transition: all 0.3s;
        }

        .profile-card textarea:focus {
            outline: none;
            border-color: #8a979e;
        }

        .profile-card__overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            opacity: 0;
            background: rgba(22, 33, 72, 0.35);
            border-radius: 12px;
            transition: all 0.3s;
        }

        .material-symbols-outlined {
            text-decoration: none;
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }

        #bt {

            width: 100px;
            height: 50px;
            border-radius: 40px;
            padding-top: 13px;
            padding-left: 5px;
            padding-right: 5px;
            justify-content: center;
            margin: auto;
            align-items: center;
            color: black;
            font-size: x-large;
            background-image: linear-gradient(-20deg, #05ef4b 0%, #6944ff 100%);
            margin-top: 10px;
          
            margin-bottom: 10px;
            margin-top: 10px;
            text-align: center;
            
       
        
        }
        #bt2 {

            border-radius: 5px;
            border:3px  solid #6c44fc;
            height: 40px;
 width: 200px;


}
#bt2:hover {

border-radius: 7px;

border:5px  solid #6c44fc;



}
a#nv{
   padding-left: 10px;

}
        .vij {
            left: 0px;
        }

        dev.profile-card-social {

            left: 0px;
        }

        .div-card_profile {
            background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);

        }

        #z {
            margin-right: 50px;
            width: 200px;
            display: block;
            display: flex;

        }

        .con2 {
            width: 200px;
            display: flex;
            border-radius: 10px;
            background-color: white;
            align-items: center;
            left: 0px;
            margin-bottom: 30px;
            justify-content: center;
            align-self: start;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            display: flex;
            margin-right: 50px;
        }

        .con3 {
            width: 300px;
            display: flex;
            border-radius: 10px;
            background-color: white;
            align-items: center;

            margin-bottom: 30px;
            justify-content: center;
            align-self: start;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            display: flex;
           
            margin-top: 50px;
        }

        div.con2 {
            float: left;

        }
        
        .con8{
            width: 350px;
            display: flex;
            border-radius: 10px;
            background-color: white;
            align-items: center;

            margin-bottom: 30px;
            justify-content: center;
            align-self: start;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            display: flex;
           height: auto;
            margin-top: 50px;
        }

        div.con8 {
            float: left;

        }
        .con4 {
            width: 300px;
            display: flex;
            border-radius: 10px;
            background-color: white;
            align-items: center;

            margin-bottom: 30px;
            justify-content: center;
            align-self: centre;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            display: flex;
              margin-left: 1rem;
            margin-top: 50px;
           
        }

    
        div.con3 {
            float: left;

        }
      
    </style>


    <style>
        i.material-symbols-outlined {
            background-color: linear-gradient(blue, purple);
            width: 50px;

            font-variation-settings:
                'FILL' 0,
                'wght' 1200,
                'GRAD', 0 'opsz' 48
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }

        #nv {
            font-size: xx-large;
            text-decoration: none;
            color: rgb(2, 225, 36);
            left: 0px;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-right: 10px;;
        }

        .account {
 align-items: center;
 justify-content: center;
            margin-top: 200px;
        }

        </style>
        <?php
        echo'
        <div class="account"><div class="profile-card js-profile-card">
        <div class="profile-card__img"><img src="../images/Untitled design.png" alt="profile card">'.$name.'</div><div class="profile-card-inf"><div class="con2"><div class="profile-card-inf__item"><div class="profile-card-inf__title">'.$tm.'</div><div class="profile-card-inf__txt">Total amount </div></div></div><div class="con2"><div class="profile-card-inf__item"><div class="profile-card-inf__title">'.$camount.'</div><div class="profile-card-inf__txt">currrent amont</div></div></div><div class="con2"><div class="profile-card-inf__item"><div class="profile-card-inf__title">'.$dm.'</div><div class="profile-card-inf__txt">Pending amount</div></div></div><div class="con2"><div class="profile-card-inf__item"><div class="profile-card-inf__title">'.$rm.'</div><div class="profile-card-inf__txt">Refer earn</div></div></div>
        <div class="con8"><div class="profile-card__txt"><strong><br>Your Sell item progress</strong>
        <div class="w3-light-grey">Electric Frige
        <div class="w3-container w3-green w3-center" style="width:45%">45%</div>
      </div><br> 
      <div class="w3-light-grey">Electric Cooler
      <div class="w3-container w3-green w3-center" style="width:15%">35%</div>
    </div><strong><br>Your Buy item progress </strong>
    <div class="w3-light-grey">Electric Heater
    <div class="w3-container w3-green w3-center" style="width:15%">15%</div>
    <strong><br>The list of item student demand </strong> <div class="w3-light-grey">';
         $sql = "SELECT * FROM `listofproduct` WHERE 1"; 
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
      $name = $row["name"];
?><?php echo '<p>'.$name.'</p>';
    
    }
  echo'  
        </div>
  </div></div></div>
        <div class="profile-card__cnt js-profile-cnt">
        <form method="post">
        <div class="con4"><div class="profile-card__name">Do you want debit money. Please before filling amount check the bank account <details>check the account number and ifse code and if you UPI ID like -phonepay,
        paytm,
        googlepay provide that number. If any kind of mistake is details of ypur account please edit it</details>Fill the amount and press the submit key</div></div><div class="con3"><div class="profile-card__name">amount debit: 
        <input type="number" name="amount" id="bt2" placeholder="  enter amount"></div></div><div class="profile-card__cnt js-profile-cnt"><div class="con3"><div class="profile-card__name">Name:<br>'.$name.'</div></div><div class="con3"><div class="profile-card__txt">UPI Id orAccount no: <strong><br>'.$ai.'  </strong></div></div><div class="con3"><div class="profile-card__txt">IFSE Code: <strong><br>'.$if.'  </strong></div></div><div class="con3"><div class="profile-card__txt">Email-id: <br><strong> '.$email.'       </strong></div></div>
        <div class="con3"><div class="profile-card__txt">Mobile No: <br><strong> '.$m.'       </strong></div></div>
        <div class="con2">
        <button type="submit" value="" id="bt" placeholder="submit">Submit</button>
        </form>
        </div>
     
     
        <div class="con2" ><a href="" id="nv">edit</a><a href="../parcials/account2.php"href="../parcials/account2.php"><i class="material-symbols-outlined" id="bt">edit</i></a></div>
        
        <div class="con2" ><a href="http://localhost/ram/parcials/login.php" id="nv">share</a><a href="http://localhost/ram/parcials/login.php"><i class="material-symbols-outlined" id="bt">share</i></a></div>
    
    ';

  ?>
    <?php
include '../header2.php';
    }
    else
    {
    
   
    echo'<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  
  <div class="container">
    <h2>Alerts</h2>
     <div class="alert alert-warning alert-dismissible">
      <a href="./login.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Warning!</strog><a id="close3">First login then you can see the dashboad</a>
    </div>
   
  
  
  </body>
  <style>
  #close3{
   color:red; 
  }
  #bt2{
    width:200px;
    
  }</style>
  </html>
  




    ';

}
?>


