<?php

    // associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("USA" => "Washington D.C", 
                      "Japan" => "Kyoto",
                      "Malaysia" => "Kuala Lumpur",
                      "South Korea" => "Seoul");

    //$capitals["Japan"] = "Tokyo";
    //$capitals["China"] = "Beijing";
    //array_pop($capitals);
    //array_shift($capitals);
    //$keys = array_keys($capitals);
    //$values = array_values($capitals);
    //$capitals = array_flip($capitals);
    //$capitals = array_reverse($capitals);


    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    echo count($capitals);

?>