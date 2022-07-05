<?php
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147


if(isset($_POST['initiate_withdraw']))
{


$posted_amt = mysqli_real_escape_string($db,$_POST['amount']);

if($posted_amt <= $max_withdraw)
{


if($posted_amt>$user_balance)
{


$msg = "Sorry, You Requested An Amount Greater Than Your A/C Balance";

}

else

{
	

//deduct requester balance
	$new_user_balance = ($user_balance - $posted_amt );
	$deduct = mysqli_query($db,"UPDATE advance_users SET user_balance='$new_user_balance' WHERE tutor_ids='$user_ids' ");

	if($deduct)
	{
		//place request


		$currency = mysqli_real_escape_string($db,$_POST['currency']);
		$details = mysqli_real_escape_string($db,$_POST['details']);
		$date_requested = date('d-m-Y');
		$reference = rand(10000,100000).rand(10000,100000).rand(10000,100000);

		$save_request = mysqli_query($db,"INSERT INTO  advance_withdraws(tutor_id,amount,currency,withdraw_details,date_requested,withdraw_status,reference) VALUES('$user_ids','$posted_amt','$currency','$details','$date_requested','pending','$reference') ");

		if($save_request)
		{

			//save message

				$to = $user_emails;
	$from = $sys_email;
	$message = "Your Withdraw Request Has Been Received On ";

	$save_note = mysqli_query($db,"INSERT INTO advance_notis(to_user,from_user,message,send_status,read_status) VALUES('$to','$from','$message','not_sent','no')");
	if($save_note)
	{
		$msg ="Withdraw Request Has Been Placed Successfully";
	}
		}



	}

}



}

else

{

	$msg = "You Can Not Withdraw An Amount Greater Than ". $max_withdraw ." UGX In A Single Request";
}









}












?>