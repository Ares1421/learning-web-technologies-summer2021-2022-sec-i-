<?php

    function check ($number){
        if ($number % 2==0){
            echo "Even";
        }
        else{
            echo "Odd";
        }
    }
    $number= 15;
    check($number)
?>