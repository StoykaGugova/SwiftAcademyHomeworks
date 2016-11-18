<?php

function biggernumber($a,$b) {
    if ($a>$b){
        echo $a . " , ". $b;
    }else {
        echo $b . " , " . $a;
    }
}
biggernumber(5,2);
echo "<br>";
biggernumber(3,4);
echo "<br>";
biggernumber(5.5,4.5);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>