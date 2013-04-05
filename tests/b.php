<?php
    
    class Person {
        public function sayOne(){
            echo 'one';
        }
        
        public function sayTwo(){
            echo 'two';
        }
    }
    
    function a($a) {
        echo $a * 2.5;
    }

    function b($count) {
        for ($i = 0; $i < $count; $i++) {
            a($i + 0.17);
        }
    }
    
    function c(){
        echo 'hello';
    }

    b(6);
    b(10);
    b(11);

    if(0){
        echo 'test';
    }
    
    $p = new Person();
    $p->sayOne();