<?php
	$str = 'aaa aaa aaa aaa aaa';
	$i = strpos($str, ' '); 
	echo strpos($str, ' ', $i + 1);
?>