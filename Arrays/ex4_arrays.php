<?php
$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
sort($temperature);
$length = count($temperature);
/*for ($i=0; $i<$length; $i++){
    echo $temperature[$i] . "<br>";
}
*/
 

$tempdata = [];
foreach ($temperature as $uniquetemp){
    if (!in_array($uniquetemp, $tempdata)){ 
       array_push($tempdata, $uniquetemp);
    }
}
//var_dump($tempdata);

echo "5 min temperatures: ";
for ($index=0; $index<5; $index++){
    echo $tempdata[$index] . ", ";
}
echo "<br>";
rsort($tempdata);
echo "5 max tempratures: ";
for ($index=0; $index<5; $index++){
    echo $tempdata[$index] . ", ";
}
echo "<br>";
echo "Average temperature for the period: ". (array_sum($temperature))/$length;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>