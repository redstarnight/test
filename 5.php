<?php

    $a=15;

    // if($a==10 || $a==20 || $a==15 || $a=40){
    //     return true;
    // }

    if(in_array($a,[10,20,30,"15"],true)){
        echo "True";
    }else{
        echo "false";
    }

?>