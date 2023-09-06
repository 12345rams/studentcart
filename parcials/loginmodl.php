<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include './_dbconnect.php';
    $email = $_POST['loginemail'];
    $pass = $_POST['loginpass'];
    $sql = "Select * from signups where email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['passward'])){
            session_start();
            $_SESSION['loggedin'] = true;
              $_SESSION['email'] = $email;
               if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                      echo "logged in". $email;
                     header("Location: /ram/index.php?signupsuccess=true");
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