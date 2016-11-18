<?php


function cal_factorial($n){
    $factorial = 1;
    for ($i= 1; $i<=$n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo cal_factorial(5)/cal_factorial(2);
echo "<br>";
echo cal_factorial(6)/cal_factorial(5);
echo "<br>";
echo cal_factorial(8)/cal_factorial(3);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

