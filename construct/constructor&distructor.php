<?php
        class Car{
            public $brand;
            public $model;
            public $color;
            private $automation;
            //سازنده ها میتونن ورودی بگیرن ولی باید این ورودی ها حتما مقدار دهی بشن
            //اگر که سازنده تعریف نکنی پیشفرض تعریف میشه ولی در زمان ساخت شی نمیتونی مقدار بدی
            public function __construct($brand , $model , $color){
                $this->brand = $brand;
                $this->model = $model;
                $this->color = $color;
                echo 'Brand of Car: '.$this->brand.' <br>' ,'Model of Car: '.$this->model.' <br>' , 'Color of Car: '.$this->color.' <br>';
            }

            public function setAuto($auto){ // برای زمانی که پراپرتی تعریف شده خصوصی باشد
              echo  $this->automation = $auto;
            }
        }
//چرا از سازنده ها استفاده میکنیم ؟؟چونکه میخواهیم در زمان ساخت شی مقدار بدهیم به این مواردی که میخواهیم
        $e=new Car("pride","131SE","red" );
        $e->setAuto("no");
        echo '<hr>';

        $e=new Car("samand","LX","blue" );
        $e->setAuto("yes");
        echo '<hr>';

        $e=new Car("bens","X4","black" );
        $e->setAuto("yes");
?>