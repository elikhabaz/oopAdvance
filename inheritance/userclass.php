<?php 

include_once 'mainclass.php';

    class User9 extends Mainclass{
        protected $table='users';
        protected $primerykey='id';

    }

    $eli= new User9();
    $print=$eli->find(1);
    var_dump($print);
    echo '<br>';
    var_dump($eli instanceof Mainclass);


?>