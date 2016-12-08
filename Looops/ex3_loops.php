<?php
$n=3;
$x=2;
$S=1;

for($i=1; $i<=$n; $i++){
    $factoriel = 1;
    for ($in=1; $in<=$i; $in++){
        $factoriel *= $in;
    
    
    $result = $factoriel/($x**$i);
    }
     
    $S+=$result;
        
    
    }
    
  echo $S; 




?>
