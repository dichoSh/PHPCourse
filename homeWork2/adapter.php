<?php
  class Target
  {
    public function Request()
    {
      echo "Called Target Request()";
   }
  }
  
class Adaptee
  {
    public function SpecificRequest()
    {
      echo "Called SpecificRequest()";
    }
  }
  class Adapter extends Target
  {
    private $adaptee;
	public function __construct(){
	$this->adaptee= new Adaptee();
	}

    public function Request()
    {
      $this->adaptee->SpecificRequest();
    }
  }

  $target = new Adapter();
      $target->Request();