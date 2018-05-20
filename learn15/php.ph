<html>
 <head>
   <meta charset="utf-8">
  <title>Т</title>
 </head>
 <body>
 <?php

$str1='-';
for ($i=1;$i<=9;$i++){
	$str1.=$i.'-';
}
echo $str1;

for ($i=1;$i<=9;$i++){
	$str1='';
	for ($j=0;$j<=$i;$j++){
	    $str1.=$i;}
	echo $str1.'<br>';
}


$str='';
for ($i=1;$i<=9;$i++){
	$str.=$i;
}
echo $str;
?>
 </body>
</html>
