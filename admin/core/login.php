<?php
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147



if(isset($_POST['admin_login']))

{

$useremail = mysqli_real_escape_string($db,$_POST['admin_email']);
$userpassword = mysqli_real_escape_string($db,$_POST['admin_pswd']);

$fetch_email = mysqli_query($db,"SELECT * FROM advance_users WHERE user_email='$useremail' && access_level='admin'");
$count_users = mysqli_num_rows($fetch_email);
if($count_users>0)
{

$user_data = mysqli_fetch_array($fetch_email);
$stored_pass = htmlentities($user_data['user_password']);
$session_code = htmlentities($user_data['tutor_ids']);

if(password_verify($userpassword, $stored_pass))
{


$_SESSION['session_code'] = $session_code;
$_SESSION['admin_login']=$useremail;
header('location:dashboard.php');

}

else

{
	$msg = "Invalid Password";
}

}

else
{
	$msg = "Invalid Email";
}








}









?>