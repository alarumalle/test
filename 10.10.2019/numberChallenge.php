<?php
//ei jõunud lõpuni kirj
$number = 25;
$numberFromUser = $_GET['number'];

if (strlen($numberFromUser) > 0) {
    if ($numberFromUser == $number) {
        echo 'Arvasid ära, pakutud number on ' . $number . '!';
    } else {
      $diff = abs($numberFromUser - $number);
        if ($diff <= 5) {
        echo "Tubli, peaaegu arvasid ära!";
        }
        if ($numberFromUser > $number) {
        echo 'Pakutud number on liiga suur!';
        } else {
        echo 'Pakutud number on liiga väike!';
        }
        }
        } else {
            echo 'Paku number!';
        }
