
<?php
$showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '_dbconnect.php';
       $email = $_POST['email'];
       
        $name=$_POST['name'];
        $accountid=$_POST['accountid'];
         $ifsccode=$_POST['Ifsccode'];
       // $sql="INSERT INTO `signups` (`email`,`passward`,`accountid`, `Ifsccode`,`name`) VALUES ('$email','$passward','$accountid','$ifsccode','$nam"e')";
       $sql="UPDATE `signups` SET `ifsccode`='$ifsccode',`name`='$name',`accountid`='$accountid' WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlert = true;
                    header("Location: /ram/index.php?signupsuccess=true");
                    exit();
                       }
  }
          echo '<script src="../static/chat.js"></script>';
  echo '<script src="../static/responses.js"></script>';
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
  
</body>
</html>
<div class="container">
  <div class="brand-logo"></div>
  <div class="brand-title">DISCOUNT ADDA</div>
  <div class="brand-title2">User account details</div>
  <form method="post">
  <div class="inputs">

     <label>NAME</label>
<input type="text" name="name">
     <label for="">UPI ID OR ACCOUNT NO</label>
    <input type="text" name="accountid">
     <label for="">IFSE CODE</label>
      <input type="text" name="Ifscode">
    <label>EMAIL</label>
    <input type="email"  name="email"placeholder="example@test.com" />
    
   
 
    <button type="submit">SUBMIT</button>
  </div>
  </form>
   
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

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
