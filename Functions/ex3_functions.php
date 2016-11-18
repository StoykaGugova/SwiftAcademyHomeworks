<?php
 function factorial($n){
     $i = 1;
     $factorial = 1;
     while ($i<=$n){
         $factorial *= $i;
         $i++;
     }
     echo $factorial;
 }
 factorial(5);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>