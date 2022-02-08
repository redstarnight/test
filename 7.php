<?php 

    $a= "CH";

    $map = [
        "IR" => "IRAN",
        "RU" => "RUSSIA",
        "US" => "UNITED STATES",
        "CH" => "CHINA",   
        "UK" => "UNITED KINGDOM", 
        "AU" => "ASTURALIAN" 
    ];


    if(isset($map[$a])){
        $b = $map[$a];
    }else{
        $b = "No Where";
    }
    echo $b;

    $b = $map[$a] ?? "No Where";
    echo "<h1>".$b."</h1>";
    // if($a=="IR"){
               
    // }elseif($a=="RU"){
       
    // }elseif($a=="US"){
       
    // }elseif($a=="CH"){
            
    // }elseif($a=="UK"){
              
    // }elseif($a=="AU"){
              
    // }else{
    //     $b = "No Where";
    // }

?>