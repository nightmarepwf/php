<?php
echo time();
echo mktime(0, 0, 0, 12, 31);
$sec = time() - mktime(7, 23, 48);
echo floor($sec / (60 * 60));
echo ' ';
echo date('Y-m-j');
echo ' ';
echo date('j.m.Y');
echo ' ';
echo date('j.m.y');
echo ' ';
echo date('H:i:s');
$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
echo $week[date('w',  mktime(0, 0, 0, 6, 6, 2006))];
echo date('t');
?>
