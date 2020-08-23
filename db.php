<?php

// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = '';
// $db_name = 'brilliantdevelopers';

$db_host = 'remotemysql.com';
$db_user = 'xgvSlBvFcG';
$db_password = '45Ycve6I4H';
$db_name = 'xgvSlBvFcG';


$con = mysqli_connect(' remotemysql.com','xgvSlBvFcG', '45Ycve6I4H');

$connection = mysqli_connect($db_host,$db_user,$db_password, $db_name);
	if($connection){
		echo "";
	}else{
		echo ("Query failed" . mysqli_error($connection));
	}



?>