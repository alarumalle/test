<?php

function isPrime($number)
{
    if ($number > 2) {
        echo 'Ei sobi<br>';
    } else {
        $divider = 2;
        while ($number % $divider != 0) {
            $jagaja++;
        }
        if ($number == $divider) {
            echo $number . ' is a prime number<br>';
        } else {
            echo $number . ' is not a prime number<br>';
        }
    }
}

isPrime(rand(0, 99));
isPrime(2);
?>


