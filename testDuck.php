<?php
    class Duck{ //main class
        public $beak;
        public $wing;

        public function SetPro(){
            echo 'this duck has a beak & wing like the other birds!';
        }
    }

    class Fly extends Duck{ 
        public $fly;
        public function __construct(){
            $this->fly;
            echo 'this duck can Fly';
        }
    }

    class Cantfly extends Duck{
        public $cantfly;
        public function __construct()
        {
             $this->cantfly;
             echo 'this duck can not fly';
        }
    }
    
    $woodenduck= new Cantfly();
    echo '<br>';
    $woodenduck->SetPro();
    echo '<hr>';
    $realduck= new Fly();
    echo '<br>';
    $realduck->SetPro();

?>