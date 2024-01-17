<?php
//این یدونه کلاس اصلی هست که ما از آن استفاده میکنیم و عملیات موردنظر خود را داخل این میگذاریم و این کلاس را به کلاس هایی دیگر اکستند میکنیم 
//مثلا من عملیات سلکت و اینسرت و دیلیت و آپدیت را نیاز دارم توی چندتا کلاس مختلف 
//خب کافیه من بیام بنویسم توی این کلاس و توی کلاس هایی که نیاز دارم این کلاس رو اکستند کنم
    class Mainclass{
        protected $db; //کانکشن دیتابیس
        protected $table;//برای این تعریف شده که هر کلاسی که خواست از این مین کلاس استفاده کنه اسم تیبل مورد نظرشو داخل این تعریف کنه
        protected $primerykey;//مثل توضیحات بالا

        public function __construct()
        { //اتصال به دیتابیس
            try {
                $this->db = new PDO("mysql:dbname=blog_webprog;host=localhost", "root", "");
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }

        public function find($id){
            $query="SELECT * FROM {$this->table} WHERE {$this->primerykey} =:id";
            $query_find=$this->db->prepare($query);
            $query_find->execute([':id'=>$id]);
            return $query_find->fetch(PDO::FETCH_OBJ);
        }

        public function delete($id){
            $query="UPDATE {$this->table} SET {$this->primerykey} =:id";
            $query_find=$this->db->prepare($query);
            $query_find->execute([':id'=>$id]);
            return $query_find->fetch(PDO::FETCH_OBJ);
        }

        public function INSERT($data){
            $query="INSERT INTO {$this->table}";
            $query_find=$this->db->prepare($query);
            $query_find->execute();
            return $query_find->fetch(PDO::FETCH_OBJ);
        }
    }
    
?>