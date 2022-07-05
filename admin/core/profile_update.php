<?php
//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147



if(isset($_POST['update_profile']))

{


$fullname = mysqli_real_escape_string($db,$_POST['fullname']);
$phone = mysqli_real_escape_string($db,$_POST['phone']);
$address = mysqli_real_escape_string($db,$_POST['address']);
$city = mysqli_real_escape_string($db,$_POST['city']);
$country = mysqli_real_escape_string($db,$_POST['country']);
$bio = mysqli_real_escape_string($db,$_POST['bio']);



//profile pic


	
$target_dir = 'resources/images/profile_pics/';
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
		
$profile_pic = $target_file;
		$update_bio = mysqli_query($db,"UPDATE advance_users SET fullname='$fullname',user_phone='$phone',address='$address',city='$city',country='$country',bio='$bio',profile_updated='yes',profile_pic='$profile_pic' WHERE tutor_ids='$user_ids'");
if($update_bio)
{
$msg = "Your Profile Has Been Updated Successfully";
}


}
else
{
	$msg = "Please Try Again";
}
}
else
{
	$msg = "Please Use A Valid Image Format";
}
}
else
{
	$msg = "Please Upload A Profile Picture";
}








}















?>