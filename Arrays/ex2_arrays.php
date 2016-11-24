<?php

function removeNumber($n = 0){
    $x = [1,2,3,4,5,6,7,8,9,10];
    unset($x[$n]);
    var_dump($x);
}
removeNumber(2); // deletes $x[2];

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

