<?php

	$user = "root";
	$pass= "";
	$host = "localhost";
	$dbname = "mis";
	$con = mysqli_connect($host, $user , $pass , $dbname);

	if(!$con)
	{
		echo 'Please contact the admin! @LemonAndVodka';
	}
?>