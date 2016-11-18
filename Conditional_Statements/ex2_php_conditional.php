<?php

function calculate($score){

if($score>=0 && $score<=3){
    $score *= 10;
    echo $score;        
}else if ($score>=4 && $score<=6){
    $score *=15;
    echo $score;
}else if ($score >=9 && $score<=9){
    $score *= 20;
    echo $score;
}else if ($score >= 12){
    $score *=100;
    echo $score;
}else if ($score < 0){
    echo "Ivalid score";
}
}
calculate(2);
echo "</br>";
echo "\n";
calculate(4);
echo "</br>";
echo "\n";
calculate(9);
echo "</br>";
echo "\n";
calculate(-1);
echo "</br>";
echo "\n";



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

