<?php
	$year = 2000;
	if ($year % 4 == 0 or ($year % 400 == 0 and $year % 100 != 0)) {
		echo 'Високосный';
	} else {
		echo 'Не високосный';
	}
?>