<?php


//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147

if(isset($_POST['register']))
{


$useremail =  mysqli_real_escape_string($db,$_POST['email']);
$userphone =  mysqli_real_escape_string($db,$_POST['phone']);
$userpass  =  mysqli_real_escape_string($db,$_POST['password']);
$userreset =  mysqli_real_escape_string($db,$_POST['rest_key']);

$hash_password = password_hash($userpass, PASSWORD_DEFAULT);
$hash_reset = password_hash($userreset, PASSWORD_DEFAULT);
$tutor_ids = rand(100000,1000000).rand(100000,1000000);

$register_user = mysqli_query($db,"INSERT INTO advance_users(user_email,user_phone,user_password,user_reset_key,user_courses,user_purchases,account_status,profile_updated,access_level,user_balance,tutor_ids,tutor_level) VALUES('$useremail','$userphone','$hash_password','$hash_reset','0','0','active','no','user','0','$tutor_ids','basic')");

if($register_user)
{
	
	header('location:login.php');
}
else
{
	$msg = "Please Choose Another Email Address And Phone";
}




}









?>