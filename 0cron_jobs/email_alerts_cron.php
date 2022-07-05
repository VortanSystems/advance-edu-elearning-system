<?php

session_start();
error_reporting(0);
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147
$db = mysqli_connect('localhost','root','','advance');

$fetch_system_settings = mysqli_query($db,"SELECT * FROM  system_settings_general");
$settings = mysqli_fetch_array($fetch_system_settings);
$app_name = htmlentities($settings['app_name']);


$fetch_notis = mysqli_query($db,"select * from advance_notis where send_status='not_sent'");
$count = mysqli_num_rows($fetch_notis);
if($count>0)
{

$msg = mysqli_fetch_array($fetch_notis);

$receiver = htmlentities($msg['to_user']);
$sender = htmlentities($msg['from_user']);
$message = htmlentities($msg['message']);
$id = htmlentities($msg['id']);

///send message

$update_msg = mysqli_query($db,"update advance_notis set send_status='sent' where id='$id'");


$name = $app_name;
$email = $sender;
$m_subject = "You have received a new message from ".$app_name;


$to = $receiver; // Change this email to your //
$subject = $m_subject;
$body = "Message:". $message;
$header = "From: ".$email;
$header .= "Reply-To: ".$email;	

if(!mail($to, $subject, $body, $header))
{
	
  http_response_code(500);
}

}
else
{
	exit();
}













?>