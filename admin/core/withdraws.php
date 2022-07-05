<?php

//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147



if(isset($_GET['approve_withdraw']))
{
  $with_ids = strip_tags($_GET['approve_withdraw']);
  $update_withdraw_status = mysqli_query($db,"UPDATE advance_withdraws SET withdraw_status='approved' WHERE id='$with_ids'");
  if($update_withdraw_status)
  {
    $msg = "Withdraw Approved Successfully";

    $toz = (htmlentities($tux_dta['user_email']));
  $fromz = $sys_email;
  $messagez = "Your Withdraw Request On ".$app_name.". Has Been Approved. Thank You For Choosing Us";


  }
}








if(isset($_GET['decline_withdraw']))
{
  $with_id = strip_tags($_GET['decline_withdraw']);

  $fetch_with = mysqli_query($db,"SELECT * FROM advance_withdraws WHERE id='$with_id'");
  $with_dta = mysqli_fetch_array($fetch_with);
  $with_amt = htmlentities($with_dta['amount']);
  $with_own = htmlentities($with_dta['tutor_id']);

  $update_withdraw = mysqli_query($db,"UPDATE advance_withdraws SET withdraw_status='declined' WHERE id='$with_id'");

  $fetch_owner = mysqli_query($db,"SELECT * FROM advance_users WHERE tutor_ids='$with_own' ");
  $own_data = mysqli_fetch_array($fetch_owner);
  $owner_bal = htmlentities($own_data['user_balance']);
  $new_owner_bal = $owner_bal+$with_amt;

  $update_owner = mysqli_query($db,"UPDATE advance_users SET user_balance='$new_owner_bal' WHERE tutor_ids='$with_own'");



 $toz = (htmlentities($tux_dta['user_email']));
  $fromz = $sys_email;
  $messagez = "Your Withdraw Request On ".$app_name.". Has Been Declined. Thank You For Choosing Us";


$msg = "Withdraw Declined Successfully";


}



?>