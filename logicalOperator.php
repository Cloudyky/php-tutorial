<?php

    $temp = 25;
    $cloudy = true;

    if($temp >= 0 && $temp <= 30){  // and
        echo "The weather is good. <br>";
    }
    else{
        echo "The weather is bad. <br>";
    }

    if($temp < 0 || $temp > 30){  // or
        echo "The weather is bad. <br>";
    }
    else{
        echo "The weather is good. <br>";
    }

    if(!$cloudy == true){ // not
        echo "It's cloudy. <br>";
    }
    else{
        echo "It's sunny. <br>";
    }

?>