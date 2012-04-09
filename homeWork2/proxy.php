<?php
	abstract class Subject
  {
    public abstract function Request();
  }

  class RealSubject extends Subject
  {
    public function Request()
    {
      echo "Called RealSubject.Request()";
    }
  }

  class Proxy extends Subject
  {
    private $realSubject;
	
    public function Request()
    {
      if ($this->realSubject == null)
      {
        $this->realSubject = new RealSubject();
      }
      $this->realSubject->Request();
    }
  }
      
$proxy = new Proxy();
$proxy->Request();