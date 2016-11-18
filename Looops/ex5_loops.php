<?php
$n = 4;
$final = ($n * 2)-1;
for ($row = 0; $row <= $n; $row++) {
    for ($column = $row + 1; $column<=$n; $column++){
        echo ' ' . $column;
        
        
    }
    echo"<br>";
    
    if ($n == $final){
        break;
    } else $n = $n + 1;
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>