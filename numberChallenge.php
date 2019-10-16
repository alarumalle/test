<?php
//ei jõunud lõpuni kirj
$number = 25;
$numberFromUser = $_GET['number'];

if (strlen($numberFromUser) > 0) {
    if ($numberFromUser == $number) {
        echo 'Arvasid ära, pakutud number on ' . $number . '!';
    } else {
        //is ok
        //compute the difference
        $diff = abs($numberFromUser - $number);
        if ($diff <= 5) {
            "Tubli, peaaegu arvasid ära!";
        }
        if ($numberFromUser > $number) {
            echo 'Pakutud number on suurem';
        } else {
            echo 'Liiga suur!';
        }
    else {
            echo 'Paku number!';
        }
    }
}

//Õpetaja kood:

/**
 * file name: numberChallenge.php;
 * autor: anna.karutina;
 * date: 16.10.2019;
 *
 * $number = 25;
 * $numberFromUser = $_GET['number'];
 * if (strlen($numberFromUser) > 0) {
 * // number is ok
 * if ($numberFromUser == $number) {
 * echo 'Arvasid ära, number on ' . $number . '!';
 * } else {
 * // compute the difference
 * $diff = abs($numberFromUser - $number);
 * if ($diff <= 5) {
 * echo 'Tubli, peaaegu arvasid ära! Aga, ';
 * }
 * // if number is not close
 * if ($numberFromUser > $number) {
 * echo 'Pakutud number on liiga suur';
 * } else {
 * echo 'Pakutud number on liiga väike';
 * }
 * }
 * } else {
 * echo 'Tuleb pakkuda number!';
 * }
 *
 */