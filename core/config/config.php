<?php
session_start();
error_reporting(0);
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147
$db = mysqli_connect('localhost','root','','advance');

include 'fetch_system_settings.php';
include 'register_users.php';
include 'login.php';
include 'user_data.php';
include 'add_a_course.php';
include 'update_profile.php';
include 'initiate_withdraw.php';
include 'rest_password.php';
include 'find_course.php';
include 'find_tutors.php';



$searchx = $_SESSION['search'];
$searchw = $_SESSION['tutor_find'];


function generateRandomString($length = 25) {
    $characters = '012-345678-9abcde-fghijkl-mnopqrstu-vwxyzA-BCDE-FGHIJK-LMNO-PQRS-TUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
//usage 
$random = generateRandomString(20);
$tocken= generateRandomString(20);










?>