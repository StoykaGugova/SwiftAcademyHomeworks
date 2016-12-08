<?php

class Factoriel 
{
    public function __construct($n) 
    {
        $this->n=$n;
    }
    
    public function PresmqtaneNaFactoriel()
    {
        
        $factoriel = 1;
        
        for ($i=1;$i<=$this->n;$i++)
        {
            $factoriel*=$i;
        }
        return $factoriel;
    }
}
$Chislo1 = new Factoriel(5);
echo $Chislo1->PresmqtaneNaFactoriel();
echo "<br>";
$Chislo2 = new Factoriel(2);
echo $Chislo2->PresmqtaneNaFactoriel();
