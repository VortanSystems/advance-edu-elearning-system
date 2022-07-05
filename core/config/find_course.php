<?php


if (isset($_POST['find_course'])) {

	# code...
if(!empty($_POST['_tocken']) && !empty($_POST['find_course']))
{
	$tocken = mysqli_real_escape_string($db,$_POST['_tocken']);
	$topic = mysqli_real_escape_string($db,$_POST['find_course']);

	$find_course = mysqli_query($db,"SELECT * FROM advance_courses WHERE course_title LIKE '%$topic%' && course_status='public' && application_status='approved'");
	$count_result = mysqli_num_rows($find_course);
	if($count_result>0)
	{
		$resaults=$count_result;
	}
	else
	{
		$resaults = $count_result;
	}
	$save_topic = mysqli_query($db,"INSERT INTO advance_searches(topic,tocken,result) VALUES('$topic','$tocken','$resaults')");
	$_SESSION['search']=$topic;

	header("location:find_course.php?_search=".$topic."&_tocken=".$tocken);
	
}
else
{


	$msg = "Please Search A Topic";
	
}
}

?>














 