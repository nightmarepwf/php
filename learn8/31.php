<?php
$arr = range('a', 'z');
shuffle($arr);
$str = implode('', $arr);
echo substr($str, 0, 6);
?>
