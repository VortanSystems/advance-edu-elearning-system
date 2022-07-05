<?php


if (isset($_POST['find_tutor'])) {

	# code...
if(!empty($_POST['_tocken']) && !empty($_POST['find_tutor']))
{
	$tocken = mysqli_real_escape_string($db,$_POST['_tocken']);
	$topic = mysqli_real_escape_string($db,$_POST['find_tutor']);

	$find_course = mysqli_query($db,"SELECT * FROM advance_users WHERE fullname LIKE '%$topic%' && account_status='active' && profile_updated='yes' && access_level='user' ");
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
	$_SESSION['tutor_find']=$topic;

	header("location:find_tutor.php?_search=".$topic."&_tocken=".$tocken);
	
}
else
{


	$msg = "Please Search A Name";
	
}
}

?>














 