<?php
    function get_autoload($class){

        $className= __DIR__."/classes/$class.php";

        if(file_exists($className)){

            include "$className";
            echo "$class Used!!";
            echo "<br>";

        }else{

            echo "$class.php Not exist!"; 
        }

    }
    spl_autoload_register("get_autoload");
?>