<?php

//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147

if(isset($_POST['add_course']))

{

		$course_title = mysqli_real_escape_string($db,$_POST['title']);
		$course_prices = mysqli_real_escape_string($db,$_POST['price']);
		$course_image = mysqli_real_escape_string($db,$_POST['image']);
		$course_details=mysqli_real_escape_string($db,$_POST['documents']);
		$course_brief = mysqli_real_escape_string($db,$_POST['overview']);


		


	if($tutor_level=='basic')
{

	//---------------------------------------------


	$check_courses = mysqli_query($db,"SELECT * FROM advance_courses WHERE course_tutor='$user_ids'");
	$count_courses = mysqli_num_rows($check_courses);
	if($count_courses>=$free_courses)
	{
$msg = 'Please Upgrade To Premium To Post More Courses'.$free_courses;
	}
	else
	{

//post the course---------------------------------------------------------

	
$target_dir = 'resources/images/courses/';
$target_file = $target_dir.rand(10,10000).basename($_FILES['image']['name']);
$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check_image = getimagesize($_FILES['image']['tmp_name']);
if($check_image !== false)
{

	//begin upload


if($image_file_type =='jpg' || $image_file_type =='jpeg' || $image_file_type =='png' || $image_file_type =='gif' || $image_file_type =='webp')
{
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
	{
		//upload pdf


 

 
 
		//upload pdf
//echo('----------------------------------------------------------------------------'.$targetdoc_file);
$course_id = rand(1000,10000000);
$save_course = mysqli_query($db,"INSERT INTO advance_courses(course_title,course_price,course_image,course_details,course_brief,application_status,course_status,course_purchases,course_tutor,course_views,course_id) VALUES('$course_title','$course_prices','$target_file','$course_details','$course_brief','pending','public','0','$user_ids','0','$course_id')");
		if($save_course)
		{
			$msg="Course Submited For Review";
		}




		 
 

 




	}
}
else

	{

		$msg = "Course Image Must Be A Valid Image";
	}

	//end upload

}

	 



 

 




	}
}

//--------------------------------------------------------------------

	if($tutor_level=='premium')
{
 //echo "<script>alert('working')</script>";

//post the course

	
$target_dir = 'resources/images/courses/';
$target_file = $target_dir.rand(10,10000).basename($_FILES['image']['name']);
$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check_image = getimagesize($_FILES['image']['tmp_name']);
if($check_image !== false)
{

	//begin upload


if($image_file_type =='jpg' || $image_file_type =='jpeg' || $image_file_type =='png' || $image_file_type =='gif' || $image_file_type =='webp')
{
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
	{
		//upload pdf


 

 
 
		//upload pdf
echo('----------------------------------------------------------------------------'.$targetdoc_file);
$course_id = rand(1000,10000000);
$save_course = mysqli_query($db,"INSERT INTO advance_courses(course_title,course_price,course_image,course_details,course_brief,application_status,course_status,course_purchases,course_tutor,course_views,course_id) VALUES('$course_title','$course_prices','$target_file','$course_details','$course_brief','pending','public','0','$user_ids','0','$course_id')");
		if($save_course)
		{
			$msg="Course Submited For Review";
		}




		 
 

 




	}
}
else

	{

		$msg = "Course Image Must Be A Valid Image";
	}

	//end upload

}

	 



 

 





}




}


?>