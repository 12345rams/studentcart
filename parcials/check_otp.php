<?php
session_start();
include './_dbconnect.php';
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$res=mysqli_query($conn,"select * from signups where email='$email' and otp='$otp'");
$count = mysqli_num_rows($res);
if($count>0){
	mysqli_query($con,"update signups set otp='' where email='$email'");
	$_SESSION['IS_LOGIN']=$email;
	echo "6";
}else{
	echo "1";
}
?>

