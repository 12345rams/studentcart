<?php
 //include './loginmodl.php';
    session_start();
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      // echo"<pre>";
      // print_r($_FILES['screenshotofpayment']);
      // echo"</pre>";

    include '_dbconnect.php';
//$pname=rand(1000,10000)."-".$_FILES["screenshotofpayment"]["name"];
// $img_name = $_FILES['screenshotofpayment']['name'];
// $img_size = $_FILES['screenshotofpayment']['size'];
// $tmp_name = $_FILES['screenshotofpayment']['tmp_name'];
// $error =$_FILES['screenshotofpayment']['error'];
// if($error == 0){
//   if($img_size>1250000){
//     echo"size of file more";
//              }
//   else{
//    $img_ex =pathinfo($img_name, PATHINFO_EXTENSION);
//    echo ($img_ex);
//    $img_ex_lc = strtolower($img_ex);
//  $allowed_exs= array("jpg","jpeg","png");
//  if(in_array($img_ex_lc,$allowed_exs)){
//   $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
//   $img_upload_path='uploads/'.$new_img_name;
//   move_uploaded_file($tmp_name,$img_upload_path);
//   //insert into the database
//   $sql="UPDATE `signups` SET `payment`='$new_img_name' WHERE 1";
//   mysqli_query($conn,$sql);
//  // header("Location: /ram/index.php?signupsuccess=true");
//  }else{
//   echo'You canload upload the file of this type';
//  }
//   }
// }else{
//   echo'error in uploading the file';
// }
//  }
$img_name = $_FILES['screenshotofordername']['name'];
$img_size = $_FILES['screenshotofordername']['size'];
$tmp_name = $_FILES['screenshotofordername']['tmp_name'];
$error =$_FILES['screenshotofordername']['error'];
if($error == 0){
  if($img_size>1250000){
    echo"size of file more";
             }
  else{
   $img_ex =pathinfo($img_name, PATHINFO_EXTENSION);
  
   $img_ex_lc = strtolower($img_ex);
 $allowed_exs= array("jpg","jpeg","png");
 if(in_array($img_ex_lc,$allowed_exs)){
  $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
  $img_upload_path='uploads/'.$new_img_name;
  move_uploaded_file($tmp_name,$img_upload_path);
  //insert into the database
  $sql="UPDATE `signups` SET `order1`='$new_img_name' WHERE 1";
  mysqli_query($conn,$sql);
  $result=  mysqli_query($conn,$sql);
  if($result){
    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
     
    </head>
    <style>
    .conv{
      width:80%;
     height:50%;
      margin-left: 10%;
        align-items: center;
        justify-content: center;
        background-color: #2ef09c;
        text-align: center;
        text-decoration: none;
        color: aliceblue;
        padding-bottom:20px;
        padding-top:20px;
        border-radius:20px;
      }
    </style>
    <body>
 
    <div class="conv">
    <h1>         Thanks!</h1>
    <h2>You are successfully upload file</h2>
    <h3>Your item is add please provide other detail</h3>
    <a href="/ram/parcials/account3.php">click to go add details</a>
  </div>
    </body>
    </html>
    ';
    // header("Location: /ram/index.php?signupsuccess=true");
    // echo'<script>
    // alert("succefully upload please attach the next screenshot");
    // </script> ';
    // header("Location: /ram/index.php?signupsuccess=true");
       
     }
   //header("Location: /ram/index.php?signupsuccess=true");
 //header("Location: /ram/parcials/upload.php");
 }else{
  echo'You canload upload the file of this type';
 }
  }
}else{
  echo'error in uploading the file';
}
}
