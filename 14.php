<?php

    class test14{
        public function test($x , $y){
            return ($x>$y);
        }
    }
    $x=10;
    $y=20;
    $testclass = new test14();
    echo $testclass->test(20,10);
?>