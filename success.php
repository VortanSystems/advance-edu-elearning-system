<?php
include 'core/config/config.php';




//pictona_success data here


//https://wallet.naweri.com


        $merchant_key =  $merchant_key; // Enter here your API Key Here From Your Naweri Account
$merchant_account = $pictona_merchant;// Enter Your Merchant Email Address Here
$txid = strip_tags($_GET['reference']);
$txn_status=strip_tags($_GET['status']);
$payee_account = strip_tags($_GET['payee']);
$item_id=strip_tags($_GET['itemid']);
$item_name = strip_tags($_GET['itemname']);
$itemprice= strip_tags($_GET['amount']);
$item_description=strip_tags($_GET['itemdescription']);
$item_currency = strip_tags($_GET['currency']);
$payment_date=strip_tags($_GET['date_paid']);

$verification_link = "https://wallet.naweri.com/api_request/verify/?api_key=$merchant_key&merchant=$merchant_account&txnid=$txid";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$verification_link);
$resultsi=curl_exec($ch);
curl_close($ch);
$requltsi = json_decode($resultsi);

echo $requltsi;
$main_url=$verification_link;
$str = file_get_contents($main_url);
// Gets Webpage Data if(strlen($str)>0)
{
$str = trim(preg_replace('/\s+/', ' ', $str));
preg_match("/\<div\>(.*)\<\/div\>/i",$str,$data);
$data=$data[1];
}
if($data=="success")
{



 

//convert the returned currency to the original posted currency * (feature only works for successfull transactions).

$currency_convert_api_link = "https://wallet.naweri.com/api_request/convert/?api_key=$merchant_key&merchant=$merchant_account&txnid=$txid";

$sitr = file_get_contents($currency_convert_api_link);

// Gets Webpage Data if(strlen($str)>0)

{

$sitr = trim(preg_replace('/\s+/', ' ', $sitr));

preg_match("/\<div\>(.*)\<\/div\>/i",$sitr,$converted_currencies);

$original_posted_currency=$converted_currencies[1];



}




echo $original_posted_currency; // the original amount returned on txn verification. use this





 $check_txn = mysqli_query($db,"SELECT * FROM transactions WHERE reference='$txid'");
 $count_txns = mysqli_num_rows($check_txn);
if($count_txns>0)

{
	header("location:transaction_exists.php");
}
else
{

$find_payer = mysqli_query($db,"SELECT * FROM advance_users WHERE user_email='$payee_account'");
$user_intel = mysqli_fetch_array($find_payer);
$payer_id = htmlentities($user_intel['tutor_ids']);
$date_today =  date('D d M Y');
$date_interval = $pro_interval;


$days = $date_interval;
$finehas = $date_today + $days .'days';

$expire_date = date('D d M Y',strtotime(($finehas)));

$save_txn = mysqli_query($db,"INSERT INTO transactions(paid_amount,reference,pay_reason,pay_date,expire_data,pay_type,pay_currency,status,pay_note,owner) VALUES('$original_posted_currency','$txid','premium subscription','$date_today','$expire_date','income','UGX','complete','Upgrade Account ID: $payer_id To Premium','$payer_id')");

if($save_txn)
{//upgrade_user


$upgrade_user = mysqli_query($db,"UPDATE advance_users SET tutor_level='premium' WHERE tutor_ids='$payer_id'");
if($upgrade_user)
{

	//save notification

	$to = $payee_account;
	$from = $sys_email;
	$message = "Your Account Has Been Upgraded To Premium";

	$save_note = mysqli_query($db,"INSERT INTO advance_notis(to_user,from_user,message,send_status,read_status) VALUES('$to','$from','$message','not_sent','no')");
	if($save_note)
	{
		header("location:successfull.php");
	}
}

}


}







//echo $original_posted_currency;

//posted amount = $original_posted_currency;

//posted currency = (define your system currency here')

//successfull

 echo($data);
}
elseif($data=="failed")
{
//transaction_failed
 echo($data);
 header("location:failed.php");

  


}
elseif($data=="unpaid") {
// Buyer Did Not Complete Transaction
echo($data);

      
header("location:unpaid.php");

}
elseif($data=="error") {
// Buyer Did Not Complete Transaction
echo($data);

header("location:error.php");
      
}













 















?>