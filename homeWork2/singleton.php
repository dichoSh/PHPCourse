<?php
class Singleton
    {
        private static $instance;
		
		protected function __construct(){
		
		}
		
        public static function Instance(){
            if (self::$instance == null){
                self::$instance = new Singleton();
            }
            return self::$instance;
        }
  }
  
 $s1 = Singleton::Instance();
 $s2 = Singleton::Instance();
 if ($s1 === $s2) echo "Objects are the same instance";