<?php

    // array = "variable" which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    //$foods[0] = "pineapple";
    //array_push($foods, "strawberry", "kiwi");
    //array_pop($foods);
    //array_shift($foods);
    //$reversed_foods =  array_reverse($foods);
    //echo count($foods);

    //echo $foods[0] . "<br>";
    //echo $foods[1] . "<br>";
    //echo $foods[2] . "<br>";
    //echo $foods[3] . "<br>";

    foreach($foods as $food){
        echo $food . "<br>";
    }

?>