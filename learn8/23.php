<?php
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search('-', $arr);
array_splice($arr, $pos, 1);
var_dump($arr);
?>
