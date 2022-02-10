<?php

    class test14{
        public function test($x , $y){
            return ($x>$y);
        }
    }
    $test = new test14();
    echo $test->test(20,10);
?>