<?php
for ($i=0; $i<=100; $i++){
    if (($i % 3 == 0) && ($i % 7 == 0)){
        continue;
    }
    echo $i . "<br>";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
