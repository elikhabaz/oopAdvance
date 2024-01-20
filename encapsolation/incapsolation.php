<?php

    class User{
        private $name;
        private $email;

        public function __construct($name , $email)
        {
            $this->name=$name;
            $this->email=$email;
        }

        public function getname(){
            return $this->name;
        }
        public function getemail(){
            return $this->email;
        }

        public function sendemail($name,$email){
            /*    every thing we want    */
        }
    }
//در این قسمت قوانین انکپسولیشن را نغض کردیم و نباید به این صورت عمل میکردیم چونکه ممکنه یک کاربر به راحتی به متغیر های پرایوت ما دسترسی پیدا کند
    

?>

///راه حل
<?php

    class User2{
        private $name;
        private $email;

        public function __construct($name , $email)
        {
            $this->name=$name;
            $this->email=$email;
        }

        public function getname(){
            return $this->name;
        }
        public function getemail(){
            return $this->email;
        }

        
    }

    class Math{
        public function sendemail($name,$email){
            /*    every thing we want    */
        }
    }
    ///این بهترین روش هست برای ما که اصل انکپسولیشن را رعایت کنیم

?>