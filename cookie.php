<?php

    // cookie = Information about a user stored in a user web-browser
    //          targeted advertisement, browsing preferences, and
    //          other non-sensitive data.

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice-cream", time() + (86400 * 3), "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo "I don't know you favorite food.";
    }

?>