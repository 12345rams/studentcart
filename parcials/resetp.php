<?php
$showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include './_dbconnect.php';
         $pass = $_POST['password'];
         $_SESSION['EMAIL']=$email;
         $hash = password_hash($pass, PASSWORD_DEFAULT);
        //  $sql="INSERT INTO `signups`('email', `passward`, `cpassward`, `debitm`, `accountid`, `ifsccode`, `name`, `currentm`, `remainm`, `totalm`, `referm`, `amount`, `otp`) VALUES ('$email ' '$pass', '44', '4', '', '', '', '', '', '', '', '', '')";
       
    
        $sql=" UPDATE `signups` SET `email`='$email',`passward`='$hash' WHERE  email ='$email'";
        $result = mysqli_query($conn, $sql);
                $result = mysqli_query($conn, $sql);
                //console.log($result);
                if($result){
                    //console.log($result);
                    $showAlert = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;
                   header("Location: /ram/index.php?signupsuccess=true");
                               }
                              }
     ?>
<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Document</title>';
echo '</head>';
echo '<body>';
echo '<style>';
echo '@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400");';
echo '';
echo 'body, html {';
echo 'font-family: "Source Sans Pro", sans-serif;';
echo 'background-color: white;';
echo 'padding: 0;';
echo 'margin: 0;';
echo '}';
echo '';
echo '#particles-js {';
echo 'position: absolute;';
echo 'width: 100%;';
echo 'height: 100%;';
echo '}';
echo '';
echo '.container{';
echo 'margin-left: 5px;';
echo 'top: 50px;';
echo 'left: 50%;';
echo 'position: absolute;';
echo 'text-align: center;';
echo 'transform: translateX(-50%);';
echo 'background-color: rgb( 33, 41, 66 );';
echo 'border-radius: 9px;';
echo 'border-top: 10px solid #79a6fe;';
echo 'border-bottom: 10px solid #8BD17C;';
echo 'width: 350px;';
echo 'height: 500px;';
echo 'box-shadow: 1px 1px 108.8px 19.2px rgb(25,31,53);';
echo '}';
echo '';
echo '.box h4 {';
echo 'font-family: "Source Sans Pro", sans-serif;';
echo 'color: #5c6bc0;';
echo 'font-size: 18px;';
echo 'margin-top:94px;;';
echo '}';
echo '';
echo '.box h4 span {';
echo 'color: #dfdeee;';
echo 'font-weight: lighter;';
echo '}';
echo '';
echo '.box h5 {';
echo 'font-family: "Source Sans Pro", sans-serif;';
echo 'font-size: 13px;';
echo 'color: #a1a4ad;';
echo 'letter-spacing: 1.5px;';
echo 'margin-top: -15px;';
echo 'margin-bottom: 70px;';
echo '}';
echo '';
echo '.box input[type = "text"],.box input[type = "password"] {';
echo 'display: block;';
echo 'margin: 20px auto;';
echo 'background: #262e49;';
echo 'border: 0;';
echo 'border-radius: 5px;';
echo 'padding: 14px 10px;';
echo 'width: 320px;';
echo 'outline: none;';
echo 'color: #d6d6d6;';
echo '-webkit-transition: all .2s ease-out;';
echo '-moz-transition: all .2s ease-out;';
echo '-ms-transition: all .2s ease-out;';
echo '-o-transition: all .2s ease-out;';
echo 'transition: all .2s ease-out;';
echo '';
echo '}';
echo '::-webkit-input-placeholder {';
echo 'color: #565f79;';
echo '}';
echo '';
echo '.box input[type = "text"]:focus,.box input[type = "password"]:focus {';
echo 'border: 1px solid #79A6FE;';
echo '';
echo '}';
echo '';
echo 'a{';
echo 'color: #5c7fda;';
echo 'text-decoration: none;';
echo '}';
echo '';
echo 'a:hover {';
echo 'text-decoration: underline;';
echo '}';
echo '';
echo 'label input[type = "checkbox"] {';
echo 'display: none; /* hide the default checkbox */';
echo '}';
echo '';
echo '/* style the artificial checkbox */';
echo 'label span {';
echo 'height: 13px;';
echo 'width: 13px;';
echo 'border: 2px solid #464d64;';
echo 'border-radius: 2px;';
echo 'display: inline-block;';
echo 'position: relative;';
echo 'cursor: pointer;';
echo 'float: left;';
echo 'left: 7.5%;';
echo '}';
echo '';
echo '.btn1 {';
echo 'border:0;';
echo 'background: #7f5feb;';
echo 'color: #dfdeee;';
echo 'border-radius: 100px;';
echo 'width: 300px;';
echo 'height: 49px;';
echo 'font-size: 16px;';
echo 'position: absolute;';
echo 'top: 79%;';
echo 'left: 8%;';
echo 'transition: 0.3s;';
echo 'cursor: pointer;';
echo '}';
echo '';
echo '.btn1:hover {';
echo 'background: #5d33e6;';
echo '}';
echo '';
echo '.rmb {';
echo 'position: absolute;';
echo 'margin-left: -24%;';
echo 'margin-top: 0px;';
echo 'color: #dfdeee;';
echo 'font-size: 13px;';
echo '}';
echo '';
echo '.forgetpass {';
echo 'position: relative;';
echo 'float: right;';
echo 'right: 28px;';
echo '}';
echo '';
echo '.dnthave{';
echo 'position: absolute;';
echo 'top: 92%;';
echo 'left: 24%;';
echo '}';
echo '';
echo '[type=checkbox]:checked + span:before {/* <-- style its checked state */';
echo 'font-family: FontAwesome;';
echo 'font-size: 16px;';
echo 'content: "\f00c";';
echo 'position: absolute;';
echo 'top: -4px;';
echo 'color: #896cec;';
echo 'left: -1px;';
echo 'width: 13px;';
echo '}';
echo '';
echo '.typcn {';
echo 'position: absolute;';
echo 'left: 339px;';
echo 'top: 282px;';
echo 'color: #3b476b;';
echo 'font-size: 22px;';
echo 'cursor: pointer;';
echo '}';
echo '';
echo '.typcn.active {';
echo 'color: #7f60eb;';
echo '}';
echo '';
echo '.error {';
echo 'background: #ff3333;';
echo 'text-align: center;';
echo 'width: 337px;';
echo 'height: 20px;';
echo 'padding: 2px;';
echo 'border: 0;';
echo 'border-radius: 5px;';
echo 'margin: 10px auto 10px;';
echo 'position: absolute;';
echo 'top: 31%;';
echo 'left: 7.2%;';
echo 'color: white;';
echo 'display: none;';
echo '}';
echo '';
echo '.footer {';
echo 'position: relative;';
echo 'left: 0;';
echo 'bottom: 0;';
echo 'top: 605px;';
echo 'width: 100%;';
echo 'color: #78797d;';
echo 'font-size: 14px;';
echo 'text-align: center;';
echo '}';
echo '';
echo '.footer .fa {';
echo 'color: #7f5feb;;';
echo '}';
echo '</style>';


echo '                   		                                      		                            
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>

<!-- 
<div class="container">
  <div class="brand-logo"></div>
  <div class="brand-title">DISCOUNT ADDA</div>
  <div class="brand-title2">Reset passward Verificatcation</div>
  <div class="inputs">
 
    <p class="brand-title2"> ENTER THE OTP</p>
<input type="text" placeholder="          OTP">
    <button type="submit">SUBMIT</button>
  </div> -->

   
    <style>
      

input {
  caret-color: red;
}

body {
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

.container {
  position: relative;
  width: 350px;

  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-logo {
  height: 100px;
  width: 100px;
  background: url("https://img.icons8.com/color/100/000000/twitter--v2.png");
  margin: auto;
  border-radius: 50%;
  box-sizing: border-box;
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
  font-size: 1.5rem;
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

button {
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

button:hover {
  box-shadow: none;
}

a {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 4px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 2px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
}
    </style>

    
</body>
</html>
</head>
<body>
<div class="login-form">
<div class="container">
  <div class="brand-logo"></div>
  <div class="brand-title">DISCOUNT ADDA</div>
  <div class="brand-title2">Reset passward </div>
  <div class="inputs">
    <form  method="post">
        <h3 class="text-center">Enter Passward</h3>       
        <div class="form-group first_box">
            <input type="text" id="email" class="form-control" placeholder="Passward" required="required" name="password">
			<span id="email_error" class="field_error"></span>
        </div>
        <div class="form-group first_box">
            <input type="submit" class="btn btn-primary btn-block" value="sign in">
        </div>
      </form>
</div>
</div>';

?>
