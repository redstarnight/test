<?php

    function personality($age,$sex,$money):bool
    {
        return $age==20 || $sex=="male" || $age ==50 || $money==2000;
    }

    if(personality(20,"",0)){
        echo "True";
    }else{
        echo "False";
    }

?>