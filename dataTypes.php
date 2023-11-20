<?php

    //datatypes

    // string
    $name = "Ikhwan Ikliluddin";
    $food = "Pizza";
    $email = "ikhwan@gmail.com";

    // int
    $age = 16;
    $users = 2;
    $quantity = 6;

    // float
    $gpa = 2.5;
    $price = 4.59;
    $tax_rate = 5.1;

    // boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo "You have ordered {$quantity} {$food}s. <br>";
    $total = $quantity * $price;
    echo "Your total is: Rm{$total}";

?>