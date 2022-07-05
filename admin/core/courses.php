<?php
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147
if (isset($_GET['approve'])) {
	# code...
	$course = strip_tags($_GET['approve']);
	$update_course = mysqli_query($db,"UPDATE advance_courses SET application_status='approved' where id='$course'");
$fetch_course_data = mysqli_query($db,"SELECT * FROM advance_courses WHERE id='$course'");
$course_data = mysqli_fetch_array($fetch_course_data);
$tutor = htmlentities($course_data['course_tutor']);
$fetch_tutor = mysqli_query($db,"SELECT * FROM advance_users WHERE tutor_ids='$tutor'");
$tutor_data = mysqli_fetch_array($fetch_tutor);
$tutor_courses = htmlentities($tutor_data['user_courses']);
$new_course_count = $tutor_courses+1;
	$update_tutor_count = mysqli_query($db,"UPDATE advance_users SET user_courses='$new_course_count' WHERE tutor_ids='$tutor'");
	if($update_tutor_count)
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





?>