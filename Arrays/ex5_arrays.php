<?php

$range = [];

for ($x = 11; $x<=20; $x++){
    array_push($range, $x);
}
shuffle($range);
foreach ($range as $item){
    echo $item . "<br>";
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

