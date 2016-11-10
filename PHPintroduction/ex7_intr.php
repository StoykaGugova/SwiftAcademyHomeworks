<?php
	echo "The version of php is: " . phpversion() . "<br>";
	echo "Last modified: ".date("F d Y H:i:s.",filemtime("ex7_intr.php")) . "<br>";
	echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; //full path of current URL
?>