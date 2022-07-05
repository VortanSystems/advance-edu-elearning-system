
<?php
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147
if (isset($_GET['approve'])) {
	# code...
	$course = strip_tags($_GET['approve']);
	$update_course = mysqli_query($db,"UPDATE advance_courses SET application_status='approved' where id='$course'");
	if($update_course)
	{
		$msg = "Course Application Approved Successfully";
	}
}




if (isset($_GET['review'])) {
	# code...
	$course = strip_tags($_GET['review']);
	$update_course = mysqli_query($db,"UPDATE advance_courses SET application_status='review' where id='$course'");
	if($update_course)
	{
		$msg = "Course Application Under Review";
	}
}

if (isset($_GET['decline'])) {
	# code...
	$course = strip_tags($_GET['decline']);
	$update_course = mysqli_query($db,"UPDATE advance_courses SET application_status='declined' where id='$course'");
	if($update_course)
	{
		$msg = "Course Application Declined Successfully";
	}
}


if(isset($_GET['refund']))

{

$ref_txn_id = strip_tags($_GET['refund']);
//update txn status
$fetch_txn = mysqli_query($db,"select * from advance_purchases where id='$ref_txn_id'");
$ref_txn_data = mysqli_fetch_array($fetch_txn);

$ref_status = htmlentities($ref_txn_data['buy_status']);
if($ref_status!=='refunded')
{
  $ref_txn = mysqli_query($db,"UPDATE advance_purchases SET buy_status='refunded' WHERE id='$ref_txn_id'");
  //reduce tutor balance
  $txn_amt = htmlentities($ref_txn_data['purchase_amount']);
  $tutor_idyz = htmlentities($ref_txn_data['tutor_id']);
  $fetch_tutor = mysqli_query($db,"SELECT * FROM advance_users WHERE tutor_ids='$tutor_idyz'");
  $tutor_data = mysqli_fetch_array($fetch_tutor);
  $tutor_balance = htmlentities($tutor_data['user_balance']);
  $remove_tutor_at = ($tutor_balance-$txn_amt);
  $tutor_sales = htmlentities($tutor_data['user_purchases']);
  $new_tutor_sales = $tutor_sales-1;
  $coursesz = htmlentities($ref_txn_data['course_id']);
  $update_tutor = mysqli_query($db,"UPDATE advance_users SET user_purchases='$new_tutor_sales', user_balance='$remove_tutor_at' WHERE tutor_ids='$tutor_idyz'");

  $fetch_course_data = mysqli_query($db,"SELECT * FROM advance_courses WHERE course_id='$coursesz'");
  $course_data = mysqli_fetch_array($fetch_course_data);
  $course_purs = htmlentities($course_data['course_purchases']);
  $new_course_cp = $course_purs-1;
  $update_course_purchases = mysqli_query($db,"UPDATE advance_courses SET course_purchases='$new_course_cp' WHERE course_id='$coursesz'");

  if($update_course_purchases)
  {
    $msg = "Amount Marked As Refunded";
  }



}
else
{
  $msg = "Transaction Already Marked As Refunded";
}



}




?>