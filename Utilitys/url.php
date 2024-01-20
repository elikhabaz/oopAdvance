<?php

    class Url{

        public static function currentUrl(){
            $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            return $actual_link;
        }

        public static function seprate($uri=null) {
            if($uri==0){
                $uri = self::currentUrl();
            }
            $segment=explode('/',$uri);
            return $segment;
        }

        public static function ex(){
            return $_REQUEST;
        }
    }
    var_dump(Url::currentUrl());
    echo '<br>';
    var_dump(Url::seprate());
    echo '<br>';
    var_dump(Url::ex());


?>