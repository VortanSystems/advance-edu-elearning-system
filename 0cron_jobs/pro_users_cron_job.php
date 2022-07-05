<?php

session_start();
error_reporting(0);
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147
$db = mysqli_connect('localhost','root','','advance');


$fetch_pro_users = mysqli_query($db,"select * from advance_users where tutor_level='premium'");
$count_pros = mysqli_num_rows($fetch_pro_users)

if($count_pros>0)
{
	
 
$date = ('D d M Y');
$fetch_pro_subscription = mysqli_query($db,"select * from transactions");
$pro_data = mysqli_fetch_array($fetch_pro_subscription);
$pro_pay_date = htmlentities($pro_data['pay_date']);
$pro_exp_date = htmlentities($pro_data['expire_data']);

if($date > $pro_exp_date)
{

$tutor_id = htmlentities($pro_data['owner']);
$update_owner = mysqli_query($db,"UPDATE advance_users SET tutor_level='basic' WHERE tutor_ids='$tutor_id'");

 
	//send email alert
 


}





}
else
{
	exit();
}















?>