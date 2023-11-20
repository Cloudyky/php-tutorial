<?php

    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            ex. add() subtract() multiply() divide()

    function happy_birthday($name, $age){
        echo "Happy Birthday to you! <br>";
        echo "Happy Birthday to {$name}! <br>";
        echo "You are {$age} years old! <br><br>";
    }

    //happy_birthday("Spongebob", 24);
    //happy_birthday("Patrick", 24);
    //happy_birthday("Squirdward", 30);

    function is_even($number){
        $result = $number + 20;
    }

    function hypotenus($a, $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenus(4, 5);

?>