
<?php

session_start();
include './_dbconnect.php';
$email=$_POST['email'];
$_SESSION['email'] = $email;
//$email ="vijay9569592952@gmail.com";
$res=mysqli_query($conn,"select * from signups where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
	$otp=rand(11111,99999);
	mysqli_query($conn,"update signups set otp='$otp' where email='$email'");
	$html="Your otp verification code is ".$otp;
	$_SESSION['EMAIL']=$email;
	smtp_mailer($email,'OTP Verification',$html);
	//echo "yes";
	echo "56";
}
else{
	echo "2";
}


// require 'includes/PHPMailer.php';
// require 'includes/SMTP.php';
// require 'includes/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function smtp_mailer($to,$subject, $msg){
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth = "true";
$mail->SMTPSecure ="tls";
$mail->Port ="587";
$mail->Username ="";
$mail->Password ="";
$mail->Subject="$subject";
$mail->setFrom("vijay9569592952@gmail.com");
$mail->Body ="$msg";
$mail->addAddress("$to");
$mail->Send();
// if($mail->Send()){
// 	return 1;
//    // echo"" .$otp;
// }
// else{
// 	return 0;
//     echo'not send';
// }
if(!$mail->Send()){
	return 0;
}else{
	return 1;
}
$mail->smtpClose();
}
?>
