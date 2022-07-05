<?php


 include('core/config.php');
 	
echo($_SESSION['session_code']);
if(session_destroy())
{

session_destroy();
header("location:index.php");	
}
?>