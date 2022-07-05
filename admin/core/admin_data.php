<?php
 //core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147

$email = $_SESSION['admin_login'];
$fetch_user = mysqli_query($db,"SELECT * FROM advance_users WHERE user_email='$email'");
$user_data = mysqli_fetch_array($fetch_user);

$user_emails = htmlentities($user_data['user_email']);
$user_ids = htmlentities($user_data['tutor_ids']);
$profile_updated = htmlentities($user_data['profile_updated']);
$tutor_level = htmlentities($user_data['tutor_level']);
$tutor_courses = htmlentities($user_data['user_courses']);
$fullname = htmlentities($user_data['fullname']);
$user_phone = htmlentities($user_data['user_phone']);
$address = htmlentities($user_data['address']);
$city = htmlentities($user_data['city']);
$country = htmlentities($user_data['country']);
$user_pic = htmlentities($user_data['profile_pic']);
$bio = htmlentities($user_data['bio']);
$user_balance = htmlentities($user_data['user_balance']);
 

?>