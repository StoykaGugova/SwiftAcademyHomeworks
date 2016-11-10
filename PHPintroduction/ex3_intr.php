<?php
	$name = "Stoyka";
	$address = "Sofia";
	$phone_number = +88888888;
	$schedule = array('Mondy'=>'free','Tuesday'=>'free','Wendsday'=>'busy');
	echo $name . " lives in " . $address . "<br>";
	print $phone_number . "<br>";
	var_dump($phone_number). "<br>";
	print_r($schedule). "<br>";
	
	echo $name . " is " . $schedule['Tuesday'] . " on Tuesday";
?>