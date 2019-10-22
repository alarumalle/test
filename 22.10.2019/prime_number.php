<?php

function isPrime($number)
{
    if ($number > 2) {
        echo 'Ei sobi';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            $jagaja++;
        }
        if ($number == $divider) {
            echo $number . 'is a prime number';
        } else {
            echo $number . 'is not a prime number';
        }
    }
}

isPrime(rand(0, 99));

?>