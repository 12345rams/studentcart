
<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include './_dbconnect.php';
    $email = $_POST['loginemail'];
    $pass = $_POST['loginpass'];
    $sql = "Select * from signups where email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows>=1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['passward'])){
            session_start();
            $_SESSION['loggedin'] = true;
              $_SESSION['email'] = $email;
               if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                      echo "logged in". $email;
                     header("Location: /ram/parcials/index2.php");
                               }
                    else
                        echo'Wrong Email or passward';
        } 
      else
         echo 'Wrong Email or passward';
    }
    else
    echo'Wrong Email or passward';
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
echo 'background-color: white';
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
echo 'margin-left:10px;';
echo 'top: 50px;';
echo 'left: 50%;';
echo 'position: absolute;';
echo 'text-align: center;';
echo 'transform: translateX(-50%);';
echo 'background-color: rgb( 33, 105, 30 );';
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
echo '<body id="particles-js"></body>';
echo '<div class="animated bounceInDown">';
echo '<div class="container">';
echo '<span class="error animated tada" id="msg"></span>';
echo '<form name="form1" class="box" action="./login.php" method="post">';
echo '<h4>Welcome to Studentcart<span>Dashboard</span></h4>';
echo '<h5>Sign in to your account.</h5>';
echo '<input type="text" name="loginemail" placeholder="Email" autocomplete="off">';
echo '<i class="typcn typcn-eye" id="eye"></i>';
echo '<input type="password" name="loginpass" placeholder="Passsword" id="pwd" autocomplete="off">';
echo '<label>';
echo '<input type="checkbox">';

echo '<small class="rmb">Remember me</small>';
echo '</label>';
echo '<a href="forgetpas.php" class="forgetpass">Forget Password?</a>';
echo '<input type="submit" value="Sign in" class="btn1">';
echo '<input type="checkbox">';
echo '<span></span>';
echo '</form>';
echo '<a href="/ram/parcials/signup.php" class="dnthave">Don’t have an account? Sign up</a>';
echo '</div>';
echo '';
echo '<script>';
echo 'var pwd = document.getElementById("pwd");';
echo 'var eye = document.getElementById("eye");';
echo '';
echo 'eye.addEventListener("click",togglePass);';
echo '';
echo 'function togglePass(){';
echo '';
echo 'eye.classList.toggle("active");';
echo '';
echo '(pwd.type == "password") ? pwd.type = "text" : pwd.type = "password";';
echo '}';
echo '</script>';
echo '</div>';
echo '</body>';
echo '</html>';
?>