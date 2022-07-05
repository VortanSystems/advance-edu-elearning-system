<?php
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147
session_start();
error_reporting(0);
$con = mysqli_connect('localhost','root','','advance');
$db = $con;

$favicon = "";//url to favicon here
$logo = ""; //url to logo here
$social_image = "";//url to social media preview image here

include 'login.php';
include 'reset.php';
include 'admin_data.php';
include 'system_data.php';
include 'profile_update.php';
include 'update_system.php';
include 'purchases.php';
include 'courses.php';
include 'withdraws.php';
include 'subscriptions.php';
include 'users.php';
?>