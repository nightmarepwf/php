
 <?php
	$arr5 = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	foreach ($arr5 as $key=>$elem) {
		if ($key == 5 or $key == 6) {
			echo '<b>'.$elem.'</b><br>';
		} else {
			echo $elem.'<br>';
		}
	}
	?>
