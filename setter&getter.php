<?php 

class Person{
    public $name; //چونکه از پابلیک استفاده کردیم کافیه یدونه کانستراکتور بنویسیم و در زمان ایجاد شی مقدار دهی را صورت دهیم
    private $id;
    private $nb;
    protected $incom;

    public function __construct($name){
        echo $this->name = $name;
    }

    //setter
    public function setid($id){
        $this->id=$id;
    }
    public function setnb($nb){
        $this->nb=$nb;
    }
    public function setincom($incom){
        $this->incom=$incom;
    }

    //getter
    public function getid(){
      return  $this->id;
    }
    public function getnb(){
      return  $this->nb;
    }
    public function getincom(){
      return  $this->incom;
    }
    
} 

$lorem= new Person('lorem'); //چونکه با تابع سازنده تعریف کردیم در زمان ساخت شی مقدار دهی انجام میشود
echo '<br>';

$lorem->setid(1810380510);
echo $lorem->getid();
echo '<br>';

$lorem->setnb(23);
echo '<br>';
echo $lorem->getnb();
echo '<br>';

$lorem->setincom(6000000);
echo '<br>';
echo $lorem->getincom();
echo '<br>';


echo '<hr>';

//از ستتر و گتتر استفاده کردیم چونکه باید به دیتتا های پرایوت و پروتکتد مقدار بدهیم پس با متد ست که یک ورودی میگیرد 
//و با توجه به دیتا ورودی و با استفاده از $this  به دیتا دسترسی پیدا میکنیم

//نکته مهم: در زمان ساخت شی باید هم ستتر و هم گتتر را صدا بزنی با ستتر مقدار دهی را انجام میدهی و با گتتر مقدار را نمایش میدهی درست مثل قسمت بالا

?>