<?php

    $age = 25;
    $citizen = true;

    //if($age >= 18 && $citizen){
    //    echo "You can vote.";
    //}
    //else{
    //    echo "You cannot vote";
    //}

    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo "The ticket price is Rm{$ticket}";

?>