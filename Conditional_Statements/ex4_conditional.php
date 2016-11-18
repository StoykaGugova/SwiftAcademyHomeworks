<?php

function plusMinus($a,$b,$c) {
    if ($a>0 && $b>0 && $c>0){
        echo "+";
    }else if ($a<0 ^ $b<0 ^ $c<0){
        echo "-";
    }else if ($a<0 && $b<0 && $c>0){
        echo "+";
    }else if ($a<0 && $b>0 && $c<0){
        echo "+";
    }else if ($a>0 && $b<0 && $c<0){
        echo "+";
    }else if ($a<0 && $b<0 && $c<0){
        echo "-";
    }
}
plusMinus(5,2,2);
echo "<br>";
plusMinus(-2,-2,1);
echo "<br>";
plusMinus(-2,4,3);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>