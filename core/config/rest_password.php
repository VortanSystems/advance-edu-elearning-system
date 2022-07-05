<?php

//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147


if(isset($_POST['rest_password']))

{

$useremail = mysqli_real_escape_string($db,$_POST['email']);
$userpassword = mysqli_real_escape_string($db,$_POST['restword']);
$new_pass = mysqli_real_escape_string($db,$_POST['newpassword']);

$fetch_email = mysqli_query($db,"SELECT * FROM advance_users WHERE user_email='$useremail' && access_level='user'");
$count_users = mysqli_num_rows($fetch_email);
if($count_users>0)
{

$user_data = mysqli_fetch_array($fetch_email);
$stored_pass = htmlentities($user_data['user_reset_key']);

if(password_verify($userpassword, $stored_pass))
{
$hashpass = password_hash($new_pass, PASSWORD_DEFAULT);
$update_password = mysqli_query($db,"UPDATE advance_users SET user_password='$hashpass' WHERE user_email='$useremail'");


header('location:login.php');

}

else

{
	$msg = "Invalid Reset Word";
}

}

else
{
	$msg = "Invalid Email";
}








}









?>