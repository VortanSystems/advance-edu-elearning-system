<?php
error_reporting(0);


$date_today = date('D d M Y');
echo($date_today).' Is The Date Today<br>';
echo "add 10 days <br>";

$days = "1";
$finehas = $date_today + $days .'days';



echo date('D d M Y',strtotime(($finehas))).' is the date 10 days from today<br>';

$muto = date('D d M Y',strtotime(($finehas)));

if($date_today > $muto)
{
	echo "working";
}

?>