<?php

class Vehicle 
{
    public $numberOfDoors = 5;
    public $color = "red";
    public $wheels = 4;
    public $mirros = 3;
    public $driver = 1;
    
    public function turnsLeft()
    {
       return "the car turns left after you turn the steering wheel to the left!";
    }
    public function turnsRight()
    {
        return "the car turns right after you turn the steering wheel to the right!";
    }
    public function goesBack()
    {
       return "the car goes back when you put the clutch on 5th gear!";
    }
    public function goesForward()
    {
        return "the car goes forward when you put the cluth on 1th gear";
    }
    public function ignition()
    {
        return "the car can be put in motion only with a key!";
    }
   
}
   $MyCar = new Vehicle;
   
   echo "My car has " . $MyCar->numberOfDoors . " doors  and " . $MyCar->ignition();

?>

