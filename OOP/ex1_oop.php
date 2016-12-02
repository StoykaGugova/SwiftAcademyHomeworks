<?php

class Dog{
    public $breed;
    public function __construct($breed){
           return $this->breed=$breed;     
    }    
    public $colorOfFur;
    public function setColorOfFur($value){
        $this->colorOfFur = $value;
    }
    public function getColorOfFur(){
        return $this->colorOfFur;
    }
    public $colorOfEyes;
    public function setColorOfEyes($value){
        $this->colorOfEyes = $value;
    }
    public function getColorOfEyes(){
        return $this->colorOfEyes;
    }
    public $lengthOfFur;
    public function setLengthOfFur($value){
        $this->lengthOfFur = $value;
    }
    public function getLengthOfFur(){
        return $this->lengthOfFur;
    }
        
    public $walk = "true";
    public $run = "true";
    public $bark = "true";
    public $bite = "true";
    public $drinkwater = "true";
}

class Human{
    public $sex;
    public $weight;
    public $heigth;
    public $dog;
    
    public function __toString(){
        return "This person";
    }
    public function __construct($dog){
        $this->dog = $dog;
    }
    public function setSex($value){
        $this->sex = $value;
    }
    public function getSex(){
        return $this->sex;
    }
    public function setWeight($value){
        $this->weight = $value;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function setHeight($value){
       $this->height = $value; 
    }
    public function getheight(){
        return $this->height;
    }
     
    public $walkswithdog = "true";
    public $runs = "true";
    public $eats = "true";
    public $talks = "true";
    public $meetsotherpeople = "true";
} 


$Bak = new Dog("German Shepard");//creates new object dog, specifying the breed
$John = new Human($Bak->breed); //creates new object Human, specifying his dog.
//echo $John->dog;
$Johnsdog = $John->dog;

echo $John . " has " . $Johnsdog;


echo "<br>";

$Kora = new Dog("Husky");
$Peter = new Human ($Kora->breed);
$Petersdog = $Peter->dog;

echo $Peter . " has " . $Petersdog;

echo "<br>";


if ($John->walkswithdog == "true" && $Peter->walkswithdog == "true"){
    echo "These two people will meet in the park with their dogs.";
} else{
   echo "They will not meet each other.";
}

echo "<br>";
$Bak->setColorOfEyes("brown");
$eyes = $Bak->getColorOfEyes();

echo $Bak->breed . " has " . $eyes . " eyes.";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

