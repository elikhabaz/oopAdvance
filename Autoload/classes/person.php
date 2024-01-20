<?php
    class Person{
        private $name;
        public function __construct()
        {
           $this->name=static::class.rand(100,999).'<br>'; 
        }

        public function getName(){
            echo $this->name;
        }
        
    }
?>