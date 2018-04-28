<?php
	$arr = [];
	$num = 30;
	
	for ($i = 1; $i <= $num; $i++) {
		if ($num % $i == 0) {
			$arr[] = $i;
		}
	}
	
	var_dump($arr);
?>
