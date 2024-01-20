<?php
    class shap{
        public static function drow(){
            echo static::class; //مفهوم به ما میگوید با استقاده از این تعزیف میتونی اسم کلاس مزیوط به آن شی را یرگزدانی
        }
    }
    class circle extends shap{

    }
    class triangle extends shap{
        
    }
    class rectangle extends shap{
        
    }

    $m=new shap();
    $m->drow();
    echo '<br>';

    $m1=new circle();
    $m1->drow();
    echo '<br>';

    $m2=new triangle();
    $m2->drow();
    echo '<br>';

    $m3=new rectangle();
    $m3->drow();
?>