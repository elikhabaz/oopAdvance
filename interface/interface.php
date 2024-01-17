<?php 
    interface Animal{
      public function makeSound(); //این توابع همان ابسترکت ها هستن بدون بدنه که در کلاس های فرزند توسعه داده میشوند
    }

    Class Cat implements Animal{ //وقتی اینترفیس داری و میخواهی در یک کلاس از آن استفاده کنی باید از کلمه کلیدی implements  استفاده کنی
        public function makeSound()
        {
            echo 'mewo';
        }
    }
        Class Dog implements Animal{
            public function makeSound()
            {
                echo 'Hop Hop';
            }
        }

        Class Cow implements Animal{
            public function makeSound()
            {
                echo 'mooo mooo';
            }
        }

    $cat= new Cat();
    $cat->makeSound();
    echo '<br>';
    $cow= new Cow();
    $cow->makeSound();
    echo '<br>';
    $dog= new Dog();
    $dog->makeSound();


?>