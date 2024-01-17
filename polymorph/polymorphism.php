<?php
//با این کار داریم میگیم که فرزندان یک کلاس پدر میتونن محتویات درون والد خود را با توجه به نیازشون تغییر بدن
    class Shape{
        protected $name='shape';

        public function drow(){ //این توی همه ی بخش ها اور رایت شده اما هر کدام کار خودشون رو انجام میدن
            echo $this->name;
        }
    }

    class circle extends Shape{
        protected $name='circle';

        public function drow(){
            echo $this->name='O';
        }
    }

        class Rectangle extends Shape{
            protected $name='rectangle';
    
            public function drow(){
                echo $this->name='! !';
            }
    
    }

    $c= new circle();
    $c->drow();
    echo '<br>';
    $r= new Rectangle();
    $r->drow();

?>