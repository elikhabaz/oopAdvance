<?php
require_once 'mainclass.php'; //حتما باید این فایل رو ریکوایر کنی چون داری از محتویات مین کلاس استفاده میکنی
    class Post extends Mainclass{

        protected $table='posts'; ///دیتا تایپ ها حتما باید در این مدل شی گرایی پروتکتد باشن
        protected $primerykey='id';

    }
    $post = new Post();
    $data= $post->find(5);
    var_dump($data);
?>