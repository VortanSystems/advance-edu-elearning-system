<?php

//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147


if(isset($_POST['admin_reset']))

{

$useremail = mysqli_real_escape_string($db,$_POST['admin_email']);
$userpassword = mysqli_real_escape_string($db,$_POST['admin_reset']);
$new_pass = mysqli_real_escape_string($db,$_POST['admin_password']);

$fetch_email = mysqli_query($db,"SELECT * FROM advance_users WHERE user_email='$useremail' && access_level='admin'");
$count_users = mysqli_num_rows($fetch_email);
if($count_users>0)
{

$user_data = mysqli_fetch_array($fetch_email);
$stored_pass = htmlentities($user_data['user_reset_key']);

if(password_verify($userpassword, $stored_pass))
{
$hashpass = password_hash($new_pass, PASSWORD_DEFAULT);
$update_password = mysqli_query($db,"UPDATE advance_users SET user_password='$hashpass' WHERE user_email='$useremail'");


header('location:index.php');

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