<?php

 class Sortirane {
     

     
     public function __construct($var1, $var2, $var3){
         $this->var1 = $var1;
         $this->var2 = $var2;
         $this->var3 = $var3;
     }
     
     public function PodrejdaneVMasiv()
     {
        $masiv=[]; 
        array_push($masiv, $this->var1);
        array_push($masiv, $this->var2);
        array_push($masiv, $this->var3);
        
        sort($masiv);
        //var_dump($masiv);
        foreach  ($masiv as $value){
            echo $value . "<br>";
        }
        
     }
    
 }          
 
 $Presmqtaj1 = new Sortirane(5,2,9);
echo $Presmqtaj1->PodrejdaneVMasiv();
$Presmqtaj2 = new Sortirane(60,192,65);
echo $Presmqtaj2->PodrejdaneVMasiv();
$Presmqtaj3 = new Sortirane(25,11,3);
echo $Presmqtaj3->PodrejdaneVMasiv();



