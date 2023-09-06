<?php
$showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include './_dbconnect.php';
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];

            if($pass == $cpass){
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                
              $sql="INSERT INTO `signups` ( `email`, `passward`, `cpassward`) VALUES ( '$email', '$hash', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlert = true;
                    header("Location: /ram/parcials/index2.php");
                    exit();
                       }
                  
            }
            else{
                printf("passward do not match");
                
            }
        }
 

    ?>