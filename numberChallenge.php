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
