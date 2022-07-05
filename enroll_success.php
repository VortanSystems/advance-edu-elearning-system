<?php
include 'core/config/config.php';




//pictona_success data here


//https://wallet.naweri.com


        $merchant_key =  $merchant_key; // Enter here your API Key Here From Your Naweri Account
$merchant_account = $pictona_merchant;// Enter Your Merchant Email Address Here
$fullname = strip_tags($_GET['fullname']);
$buyer_phone = strip_tags($_GET['buyer_phone']);
$txid = strip_tags($_GET['reference']);
$txn_status=strip_tags($_GET['status']);
$payee_account = strip_tags($_GET['payee']);
$item_id=strip_tags($_GET['itemid']);
$item_name = strip_tags($_GET['itemname']);
$itemprice= strip_tags($_GET['amount']);
$item_description=strip_tags($_GET['itemdescription']);
$item_currency = strip_tags($_GET['currency']);
$payment_date=strip_tags($_GET['date_paid']);

//----------------------------------------------------------incomplete



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





 $check_txn = mysqli_query($db,"SELECT * FROM advance_purchases WHERE wallet_reference='$txid'");
 $count_txns = mysqli_num_rows($check_txn);
if($count_txns>0)

{
	header("location:transaction_exists.php");
}
else
{

//fetch_course_data

	$course = mysqli_query($db,"SELECT * FROM advance_courses WHERE course_id='$item_id'");
	$course_data = mysqli_fetch_array($course);
	$c_purchases = htmlentities($course_data['course_purchases']);
	$new_c_purchases = $c_purchases+1;
	$course_owner = htmlentities($course_data['course_tutor']);




	//UPDATE COURSE PURCHASE COUNT
	$update_course_purchases = mysqli_query($db,"UPDATE advance_courses SET course_purchases='$new_c_purchases' WHERE course_id='$item_id'");

	//fetch tutor data
	$fetch_tutor = mysqli_query($db,"SELECT * FROM advance_users WHERE tutor_ids='$course_owner'");
	$tutor_data = mysqli_fetch_array($fetch_tutor);
	$tutor_balance = htmlentities($tutor_data['user_balance']);
	$tutor_purchase = htmlentities($tutor_data['user_purchases']);
	$new_tutor_bal = $tutor_balance+$original_posted_currency;
	$new_tutor_purchases = ($tutor_purchase+1);

		//save purchase
	$save_purchase = mysqli_query($db,"INSERT INTO advance_purchases(buyer_email,buyer_name,buyer_phone,course_id,tutor_id,buying_time,buy_status,payment_status,purchase_amount,wallet_reference) VALUES('$payee_account','$fullname','$buyer_phone','$item_id','$payment_date','complete','complete','$original_posted_currency','$txid')");

			//save message payer



	$to = $payee_account;
	$from = $sys_email;
	$message = "Your Fee For Enrollment  Has Been Received, The Tutor Will Be In Touch";

	$save_note = mysqli_query($db,"INSERT INTO advance_notis(to_user,from_user,message,send_status,read_status) VALUES('$to','$from','$message','not_sent','no')");


	//save message tutor




	$toz = $payee_account;
	$fromz = $sys_email;
	$messagez = "You Have Received A New Enrollment. Please Get In Touch With The Student Or Their Fee Will Be Refunded In Seven Days";

	$save_notez = mysqli_query($db,"INSERT INTO advance_notis(to_user,from_user,message,send_status,read_status) VALUES('$toz','$fromz','$messagez','not_sent','no')");



				//update tutor balance

	$save_tutor_balance = mysqli_query($db,"UPDATE advance_users SET user_balance='$new_tutor_bal', user_purchases='$new_tutor_purchases' WHERE tutor_ids='$course_owner'");




















 header("location:successfull.php");
 


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