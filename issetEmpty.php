<?php

    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Return TRUE if a variable is not declared, false, null, ""

    $username = "Ikhwan";

    if(isset($username)){
        echo "This variable is set. <br>";
    }
    else{
        echo "This variable is NOT set. <br>";
    }

    if(empty($username)){
        echo "This variable is empty. <br>";
    }
    else{
        echo "This variable is NOT empty. <br>";
    }

?>