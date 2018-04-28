<?php
$a= array('a', 'b', 'c');
var_dump($a);
//2
	echo $arr[0].'<br>';
	echo $arr[1].'<br>';
	echo $arr[2].'<br>';
//3	
$arr1 = array('a', 'b', 'c', 'd');
echo $arr1[0].'+'. $arr1[1].', '.$arr1[2].'+'.$arr1[3]; 
//4
$arr2 = array(2, 5, 3, 9);
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;

//6
$arr3 = array('a'=>1, 'b'=>2, 'c'=>3);
echo $arr['c'];
?>