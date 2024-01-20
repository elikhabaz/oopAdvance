<?php
    include "model/user.php";
    include "utility/user.php";

    $m1 = new App\model\User();
    $m2 = new App\utility\User();
    echo "<br>";
    use App\model\User as modelclass;
    use App\utility\User as utilityclass;

    $m1= new modelclass;
    $m2= new utilityclass;

?>