<?php 

//این نوع کلاس ها خواص جالبی دارند مثلا تو داخل این کلاس ها فقط میای متد ابسترکت تعریف میکنی 
//و وقتی بچه ها رو میسازی و کلاس والد رو اکستند کردی دیگه توی بدله کلاس والد توسعه نمیدی 
//توی بدنه فرزند باید توسعه اون تابع رو انجام بدی
//حتی تو نمیتونی از کلاس ابسترکت یک شی بسازی تو باید از کلاس های فرزند شی های خودتو بسازی
    abstract class Shape1{
        abstract public function getArea($r);
    }

    class Triangle extends Shape1{
        public $s;
        public function getArea($s){
            $this->s;
            $area= $s*$s*3.14;
            return $area;
        }
    }

    class Squer extends Shape1{
        public $x;
        public function getArea($x){
            $this->x;
            $area= $x*$x;
            return $area;
        }
    }



    $nn= new Triangle();
    $mm= new Squer();

    echo 'area is:'. $nn->getArea(2);
    echo '<br>';
    echo 'area is:'. $mm->getArea(2);


?>