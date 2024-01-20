<?php

    include ('static.php');
    
    for($i=0; $i< rand(0,50); $i++){
        $m1= new Sheep();
        $m1->baa();
    }

 
    echo $m1::get();
    echo sheep::get();
    echo PHP_EOL;
    

?>