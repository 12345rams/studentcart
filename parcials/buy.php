
<?php

include '_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  ;
  $img_name = $_FILES['screenshotofpayment']['name'];
  $img_size = $_FILES['screenshotofpayment']['size'];
  $tmp_name = $_FILES['screenshotofpayment']['tmp_name'];
  $error = $_FILES['screenshotofpayment']['error'];
  if ($error == 0) {
                    if ($img_size > 1250000) {
                      echo "size of file more";
                                  } else {
                                   $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                   $img_ex_lc = strtolower($img_ex);
                                     $allowed_exs = array("jpg", "jpeg", "png");
                                          if (in_array($img_ex_lc, $allowed_exs));
                                           $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = 'uploads/' . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
        //insert into the database
        $sql = "UPDATE `signups` SET `payment`='$new_img_name' WHERE 1";
        mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $sql);
        if ($result) {
          // header("Location: /ram/index.php?signupsuccess=true");
          echo '<script>
 alert("succefully upload please attach the next screenshot");
 </script>
    ';
        }
      } 
  }

      else{
        echo 'You cannot upload the file of this type';
      }
    }
 
';

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
</head>
<body>
    <style>
.input-file-container {
  position: relative;
  width: 225px;
} 
.js .input-file-trigger {
  display: block;
  padding: 14px 15px;
  background: #0362d7;
  color: #fff;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
  border-radius: 10%;
}
.js .input-file {
  position: absolute;
  top: 0; left: 0;
  width: 225px;
  opacity: 0;
  padding: 14px 0;
  cursor: pointer;
}
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
  background: #1da8ee;
  color:white;
}

.file-return {
  margin: 0;
}
.file-return:not(:empty) {
  margin: 1em 0;
}
.js .file-return {
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
.js .file-return:not(:empty):before {
  content: "Selected file: ";
  font-style: normal;
  font-weight: normal;
}






/* Useless styles, just for demo styles */

.body {
 
  color: #7F8C9A;
  background: #FCFDFD;
  margin-bottom: 100px;
}
 h5 {
font-size: 10px;
  font-weight: normal;
  text-align: center;
  color:#aaa;
  font-family: "Carter One", cursive;
}

  h1 {
font-size: 10px;
  font-weight: normal;
  text-align: center;
  color:#aaa;
  font-family: "Carter One", cursive;

}
h5 {

  color: #1ABC9C;
}
form {
  width: 225px;
  margin: 0 auto;
  text-align:center;
}
.h5 + P {
  text-align: center;
}
.txtcenter {
  margin-top: 4em;
  font-size: .9em;
  text-align: center;
  color: #aaa;
}
.copy {
  margin-top: 2em;
}
.copy a {
  text-decoration: none;
  color: #07ff1c;
}
    </style>
    <script>
document.querySelector("html").classList.add("js");

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
    </script>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      
    </body>
    </html>';
?>
<?php
  echo '<script src="../static/chat.js"></script>';
  echo '<script src="../static/responses.js"></script>

    <div class="body">
    <div class="containerx">
      <div class="brand-logo"></div>
      <div class="brand-title">Studentcart</div>
      <div class="brand-title">Add Payment</div>
      <h5>Scan and pay</h5>
     
             <h5>Add screenshot of payment </h5>
     
         <form name="form1" class="" action="./upload3.php" method="post" enctype="multipart/form-data">
         <h5 class="butt">Add screenshot of Payment</h5>
               <div class="input-file-container">  
                 <input type="file" name ="screenshotofordername">
                 <input type="submit" id="butt" value="upload">
               </div>
     
     </form>
     
  
     
  
      </div>
    
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap");
    
    input {
      caret-color: red;
    }
    
    .body {
      margin: 0;
      width: 100vw;
      height: 100vh;
      background: #ecf0f3;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      place-items: center;
      overflow: hidden;
      font-family: poppins;
    }
    
    .containerx {
      margin-top: 10px;
      position: relative;
      width: 350px;
    
      border-radius: 20px;
      padding: 40px;
      box-sizing: border-box;
      background: #ecf0f3;
      box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
    }
    
    .brand-logo {
      height: 300px;
      width: 300px;
      background: url("../images3/payment.jpeg");
  
      
     
      box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
    }
    
    .brand-title {
      margin-top: 10px;
      font-weight: 900;
      font-size: 1.8rem;
      color: #1DA1F2;
      letter-spacing: 1px;
    }
    .brand-title2 {
      margin-top: 10px;
      font-weight: 900;
      font-size: 1rem;
      color: #1DA1F2;
      letter-spacing: 1px;
    }
    .inputs {
      text-align: left;
      margin-top: 30px;
    }
    
    label, input, button {
      display: block;
      width: 100%;
      padding: 0;
      border: none;
      outline: none;
      box-sizing: border-box;
    }
    
    label {
      margin-bottom: 4px;
    }
    
    label:nth-of-type(2) {
      margin-top: 12px;
    }
    
    input::placeholder {
      color: gray;
    }
    
    input {
      background: #ecf0f3;
      padding: 10px;
      padding-left: 20px;
      height: 50px;
      font-size: 14px;
      border-radius: 50px;
      box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
    }
    
    #butt{
      color: white;
      margin-top: 20px;
      background: #1DA1F2;
      height: 40px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 900;
      box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
      transition: 0.5s;
    }
    
    #butt {
      color: white;
      margin-top: 10px;
      background: #1DA1F2;
      height: 40px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 1300;
      box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
      transition: 0.5s;
    }
    button:hover {
      box-shadow: none;
    }
    

    
    h1 {
      position: absolute;
      top: 0;
      left: 0;
    }
        </style>
    
        
    </body>
 
</div>
</body>
</html>
  ';
  include '../header2.php';

