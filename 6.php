<?php

    $numbers = [1,5,8,0,0,10,null,60,80,null,""];

    $isInt = function($number){
        return is_int($number);
    };

    // foreach(array_filter($numbers,$isInt) as $num ){
    //     echo $num;
    // }
        foreach (array_filter($numbers,$isInt) as $key => $value) {
            echo var_export($value,true)."\n";
        }
?>