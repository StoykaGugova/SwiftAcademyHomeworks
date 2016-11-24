<?php
function addElement($index=1, $element = "climbing"){
 $x = ['tennis', 'basketball', 'swimming']; 
 $length = count($x);
 if ($index<$length){
     array_push($x, $element);
 }else {
     $x[$index] = $element;
 }
 var_dump($x);
}

addElement(2, "fencing");
echo "<br>";
addElement(6, "hiking");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

