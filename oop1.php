<?php
    class Person9{
        public $name;
        public $age;

        public function setName(){
            echo 'Name is:' . $this->name;
            //دسترسی به یک پراپرتی از یک کلاس در داخل یک متد از همان کلاس
        }

        public function setAge(){
            echo 'Age is:'. $this->age;
        }
    }

    $p1= new Person9(); //ایجاد شی جدید
    $p1->name='elahe'; //تخصیص یک نام به شی تازه ساخته شده
    $p1->setName(); // صدا زدن متد در جهت ایجاد نام و اینکه مقداری را برگرداند
    echo '<br>';
    $p1->age= 15;
    $p1->setAge();
    echo '<hr>';

?>


<?php 
     class Person2{
        private $name;
        private $age;

        public function setterName($newname){
            echo 'Name is:' . $this->name=$newname;
            //دسترسی به یک پراپرتی از یک کلاس در داخل یک متد از همان کلاس
        }

        public function setterAge($newage){
            echo 'Age is:'. $this->age=$newage;
        }
    }

    $p1= new Person2(); //ایجاد شی جدید
    $p1->setterName('eli'); 
    echo '<br>';
    $p1->setterAge(18);
    echo '<hr>';

?>

<?php
    class Programmer extends Person2{//کلاس برنامه نویس از کلاس شخص خصوصیت های کلاس شخص 2 را به ارث برده ولی مراقب باش توی همین فایل قابل استفاده هست
        private $system;

        public function setSys($newestsys){
            echo 'her system is:'.$this->system=$newestsys;
        }

    }

    $m=new Programmer();
    $m->setterName('ella');  
    echo '<br>';
    $m->setterAge(27);
    echo '<br>';
    $m->setSys('lenovo');
    echo '<hr>';

?>
