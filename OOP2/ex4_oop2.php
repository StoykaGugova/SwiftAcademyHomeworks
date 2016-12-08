<?php

require_once "MobileInterface.php";

class Mobile implements MobileInterface
{
    
    public function __construct($model, $manufacturer, $owner, $battery, $screen, $type)
        {
          $this->model=$model;  
          $this->manufacturer = $manufacturer;
          $this->owner = $owner;
          $this->battery = $battery;
          $this->screen = $screen;
          $this->type = $type;
        }
    public function getModel()
       {
        
        return "This is $this->model";
       }
    public function getInfo()
    {
        return "The manufacturer $this->manufacturer";
    }
    public function getOwner()
    {
        return "The owner is $this->owner";
    }
    public function getBattery()
    {
        return "The battery life is $this->battery";
    }
    public function getScreen()
    {
        return "The screen is $this->screen";
    }
    public function getType()
    {
        return "The type is $this->type";
    }
          
        
}
$MyPhone1 = new Mobile("Iphone", "China", "Stoyka Gugova", "5 years", "touch-creen", "5S");
echo $MyPhone1->getModel();
echo "<br>";
$MyPhone2 = new Mobile("Samsung", "USA", "Ivan Petrov", "3 years", "LCD", "5");
echo $MyPhone2->getModel();
echo "<br>";
$MyPhone3 = new Mobile("Nokia", "China", "John Doe", "8 years", "LCD", "6");
echo $MyPhone3->getModel();

