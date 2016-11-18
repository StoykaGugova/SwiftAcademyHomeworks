<?php

function biggest($a, $b, $c) {
    if ($a>$b && $a>$c){
        echo $a;
    }else if ($b>$a && $b>$c){
        echo $b;
    }else if ($c>$a && $c>$b){
        echo $c;
    }
}

biggest(5,2,2);
echo "<br>";
biggest(-2,-2,1);
echo "<br>";
biggest(-2,4,3);
echo "<br>";
biggest(0,-2.5,5);



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>