                   		                                      		                            
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

 
        <div ><img class="brand-logo" ></div>
  <div class="brand-title">Student Cart</div>
  <div class="brand-title2">Reset passward </div>
  <div class="inputs">
    <form  method="post">
        <h3 class="text-center">Enter Email</h3>       
        <div class="form-group first_box">
            <input type="text" id="email" class="form-control" placeholder="Email" required="required">
			<span id="email_error" class="field_error"></span>
        </div>
        <div class="form-group first_box">
            <button type="button" class="btn btn-primary btn-block" onclick="send_otp()">Send OTP</button>
        </div>
        <div class="form-group second_box">
            <input type="text" id="otp" class="form-control" placeholder="otp" required="required">
			<span id="otp_error" class="field_error"></span>
        </div>
        <div class="form-group second_box">
            <button type="button" class="btn btn-primary btn-block" onclick="submit_otp()">Submit OTP</button>
        </div> 
<!--     
        <div class="form-group third_box">
            <input type="text" id="otp" class="form-control" placeholder="passward" required="required">
			<span id="otp_error" class="field_error"></span>
        </div>
        <div class="form-group third_box">
            <button type="button" class="btn btn-primary btn-block" onclick="submit_pass()">Submit passward</button>
        </div>        -->
    </form>
</div>
<script>

function send_otp(){
var email=jQuery('#email').val();
jQuery.ajax({
  url:'sendotp.php',
		type:'post',
		data:'email='+email,
    //function(result){
		success:function(resu){
      
      //jQuery('.second_box').show();
			//jQuery('.first_box').hide();
    //jQuery('.third_box').hide();

console.log(resu);
		if(resu >8){
      jQuery('.second_box').show();
		jQuery('.first_box').hide();
    }
	          
     if(resu<6){
        jQuery('#email_error').html('Please enter valid email');
      }
  }
  
  });
}

function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:"check_otp.php",
		type:'post',
		data:'otp='+otp,
    success:function(result){
      console.log(result);
        if(result >3){
				window.location='./resetp.php';
		          	}
		      if(result<2){
				      jQuery('#otp_error').html('Please enter valid otp');
		          	}
		}
	});
}
</script>
<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
</body>
</html>        
<img src="./resetp.php" alt="">
  
  
 

  



