<?php

  abstract class Product
  {
  }
  
  class ConcreteProductA extends Product
  {
  }

  class ConcreteProductB extends Product
  {
  }

  abstract class Creator
  {
    public abstract function FactoryMethod();
  }

  class ConcreteCreatorA extends Creator
  {
    public function FactoryMethod()
    {
      return new ConcreteProductA();
    }
  }

  class ConcreteCreatorB extends Creator
  {
    public function FactoryMethod()
    {
      return new ConcreteProductB();
    }
  }

	  $creators = array();
      $creators[0] = new ConcreteCreatorA();
      $creators[1] = new ConcreteCreatorB();
      foreach ($creators as $creator)
      {
        $product = $creator->FactoryMethod();
        echo "Created".get_class($product)."<br/>";
      }