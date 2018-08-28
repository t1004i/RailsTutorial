<?php
	date_default_timezone_set('Asia/Tokyo');
	$time = time();
	$birthday = date(DATE_ATOM,mktime(0,0,0,1,16,1983));
	print($time-$birthday);
?>

