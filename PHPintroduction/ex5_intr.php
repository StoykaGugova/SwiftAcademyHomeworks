<?php
$x = 5;
$y = -5;
var_dump($x>$y); //returns true

$z = 10;
$w = 0;

var_dump($z>$w); //returns true

$a = 12;
$b = 0.2;

if($a<=$b){
	echo "true"; //returns false
}else{
	echo "false";
}

$c = 4;
$d = 20;
echo ($c>=$d)? "true" : "false"; //returns false

$e = 9;
$f = "9";
var_dump($e == $f); //returns true

$g = 9;
$h = "9";
var_dump($g === $h); //returns false

$i = 0;
$j = "0";
var_dump($i != $j); //returns false


?>