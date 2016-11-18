<?php
function sortirane($a,$b,$c){
    if ($a>$b && $a>$c){
        if($b>$c){
            echo $a . " " . $b . " " . $c; 
        }else {
            echo $a . " " . $c . " " . $b; 
        }
    }else if($b>$a && $b>$c){
        if($a>$c){
            echo $b . " " . $a . " " . $c; 
        }else {
            echo $b . " " . $c . " " . $a; 
       }
     }else if($c>$a && $c>$b){
        if($a>$b){
            echo $c . " " . $a . " " . $b; 
        }else {
            echo $c . " " . $b . " " . $a; 
        }   
    }
}
sortirane(5,1,2);
echo "<br>";
sortirane(-2,-2,1);
echo "<br>";
sortirane(-2,4,3);



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>