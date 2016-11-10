<?php
function kvaur($a,$b,$c){
	$D = $b**2 - 4*$a*$c;
	$x1 = (-$b + sqrt(ABS($D)))/(2*$a);
	$x2 = (-$b - sqrt (ABS($D)))/(2*$a);
	return $x1 . "<br>" . $x2 . "<br>";
	}
	
	echo kvaur(6,-4,1);
	echo kvaur(3,4,-10);
	echo kvaur(8,-10,4);
	echo kvaur(-7,-8,14);
	#additional one returning intiger, calcualtes properly,  not in the task
	echo kvaur(1,-5,6)  . "<br>";;
	
	//some tesing on square root
	//the number in square root can not be negative, gives error
	//absolute value should be found and "-" put in front?? - testing:not correct
	//result differs
	
	$par = (-4)**2 - 4*6*1;
		
	if ($par<0){
		
		echo $w = "-" . sqrt(ABS($par));
	}
	else{
		echo $w = sqrt($par);
	}
	$y1 = (-(-4)+$w)/(2*6);
	$y2 = (-(-8)-$w)/(2*6);
	echo "the result is" . $y1 . "<br>";
	echo $y2 . "<br>";
	//Kogato imame otricatelno chislo v koren kvardat, uravnenieto nqma reshenie!!!!
	//konvertiraneto v absolutna stojnost ne e reshenie, nito pak izvejdaneto na minusa otpred!!!!
	//Zatova poluchavame NAN na nqkoi uravneniq
?>


