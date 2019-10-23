<?php
function isPrime($number){
  if($number < 2) {
    $result = 'this number is not valid';
  } else {
    $divider = 2;
    while ($number % $divider != 0) {
      $divider++;
    }
    if($number == $divider) {
      $result = true;
    } else {
      $result = false;
    }
  }
  return $result;
}
function description($number) {
  echo $number;
  if(isPrime($number) === true){
    echo ' is prime';
  } else if(isPrime($number) === false){
    echo ' is not prime';
  } else {
    echo ' - '.isPrime($number);
  }
  echo '<br>';
}
description(rand(0,99));



//ilma kirjelduseta
/*<?php

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
*/


