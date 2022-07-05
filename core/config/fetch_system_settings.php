<?php

//core by Naweri Industries support@naweri.com www.company.naweri.com +256751021147
$fetch_system_settings = mysqli_query($db,"SELECT * FROM  system_settings_general");
$settings = mysqli_fetch_array($fetch_system_settings);
$pro_price = number_format(htmlentities($settings['pro_price']));
$pro_fee = (htmlentities($settings['pro_price']));
$pro_interval = number_format(htmlentities($settings['pro_interval']));
$free_courses = htmlentities($settings['free_account_courses']);
$pictona_merchant = htmlentities($settings['pictona_merchant']);
$merchant_key = htmlentities($settings['merchant_key']);
$min_withdraw = htmlentities($settings['min_withdraw']);
$max_withdraw = htmlentities($settings['max_withdraw']);
$landing = htmlentities($settings['landing']);
$contact_us = htmlentities($settings['contact_us']);
$about_us = htmlentities($settings['about_us']);
$terms_of_use = htmlentities($settings['terms_of_use']);
$faqs = htmlentities($settings['faqs']);




$app_name = htmlentities($settings['app_name']);
$base_url = htmlentities($settings['base_url']);
$meta_title = htmlentities($settings['meta_title']);
$welcome_text = htmlentities($settings['welcome_text']);
$meta_description = htmlentities($settings['meta_description']);
$meta_key_words = htmlentities($settings['meta_key_words']);

$sys_email = htmlentities($settings['sys_email']);
$about_us = ($settings['about_us']);
$faqs = ($settings['faqs']);
$maintenance_mode = htmlentities($settings['maintenance_mode']);
//$contact_us = htmlentities($settings['contact_us']);
//$terms_of_use = htmlentities($settings['terms_of_use']);



$new_user = $_SESSION['new_user'];
$count_courses = mysqli_query($db,"SELECT * FROM advance_courses WHERE application_status='approved' && course_status='public'");
$count =mysqli_num_rows($count_courses);

$course_count = number_format($count);



$count_tutors = mysqli_query($db,"SELECT * FROM advance_users WHERE account_status='active' && profile_updated='yes' && access_level='user'");
$tutors_c =mysqli_num_rows($count_tutors);

$tutorz_count = number_format($tutors_c);

?>