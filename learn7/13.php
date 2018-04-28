<?php
	$str = '23432.png';
	$check = substr($str, -4);
	if ($check == '.png') {
		echo 'Да';
	} else {
		echo 'Нет';
	}
?>