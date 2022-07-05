<?php

//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147

if(isset($_GET['deactivate_user']))
{
  $user_id = strip_tags($_GET['deactivate_user']);
  $deactivate_user = mysqli_query($db,"UPDATE advance_users SET account_status='suspended' WHERE id='$user_id'");
  $msg = "User Has Been suspended Successfully";
}


if(isset($_GET['activate_user']))
{
  $user_id = strip_tags($_GET['activate_user']);
  $deactivate_user = mysqli_query($db,"UPDATE advance_users SET account_status='active' WHERE id='$user_id'");
  $msg = "User Has Been Activated Successfully";
}


?>