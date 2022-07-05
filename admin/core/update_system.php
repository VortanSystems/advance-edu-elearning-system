<?php


//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147


if(isset($_POST['update_system']))

{



$pro_price = mysqli_real_escape_string($db,$_POST['pro_fee']);
$pro_interval = mysqli_real_escape_string($db,$_POST['pro_interval']);
$free_courses = mysqli_real_escape_string($db,$_POST['free_courses']);
$pictona_merchant = mysqli_real_escape_string($db,$_POST['pictona_merchant']);
$merchant_key = mysqli_real_escape_string($db,$_POST['merchant_key']);
$min_withdraw = mysqli_real_escape_string($db,$_POST['min_withdraw']);
$max_withdraw = mysqli_real_escape_string($db,$_POST['max_withdraw']);
$sys_email = mysqli_real_escape_string($db,$_POST['sys_email']);
$maintenance_mode = mysqli_real_escape_string($db,$_POST['maintenance_mode']);
$app_name = mysqli_real_escape_string($db,$_POST['app_name']);
$base_url = mysqli_real_escape_string($db,$_POST['base_url']);
$meta_title = mysqli_real_escape_string($db,$_POST['meta_title']);
$welcome_text = mysqli_real_escape_string($db,$_POST['welcome_text']);
$meta_description = mysqli_real_escape_string($db,$_POST['meta_description']);
$meta_key_words =mysqli_real_escape_string($db,$_POST['meta_key_words']);
$about_us = mysqli_real_escape_string($db,$_POST['about_us']);
$faqs = mysqli_real_escape_string($db,$_POST['faqs']);



//upload landing


	
$target_dir = '../resources/images/system/';
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



		//start system update

		$update_units = mysqli_query($db,"UPDATE system_settings_general SET pro_price='$pro_price',pro_interval='$pro_interval',free_account_courses='$free_courses',pictona_merchant='$pictona_merchant',merchant_key='$merchant_key',min_withdraw='$min_withdraw',max_withdraw='$max_withdraw',landing='$target_file',about_us='$about_us',faqs='$faqs',app_name='$app_name',base_url='$base_url',meta_title='$meta_title',welcome_text='$welcome_text',meta_description='$meta_description',meta_key_words='$meta_key_words',sys_email='$sys_email',maintenance_mode='$maintenance_mode'");

		if($update_units)
		{
			//save an alert
			$msg = "System Update Complete";
		}
	}

}

}







}

















?>