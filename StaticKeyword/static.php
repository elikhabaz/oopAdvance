<?php 
class Sheep{
    private $name;
    protected static $count;

    public function __construct()
    {
        $this->name="SHEEP-".rand(100,999);  
        self::$count++;
        echo '<br>';
    }

    public function baa(){
        echo "$this->name:ba".str_repeat('a',rand(1,10)).PHP_EOL;
    }

    public static function get(){
        echo '<br>'.'The Number Of Sheep = ';
        return self::$count;
    }
}
?>