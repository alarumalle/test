<?php

$age = 5;
echo 'Vanus = ' . $age . '<br>';
if ($age > 0 and $age < 18) {
    echo 'Oled laps.';
}
if ($age > 17 and $age < 66) {
    echo 'Oled täiskasvanu.<br>';
}
if ($age > 65) {
    echo 'Oled seenior.<br>';
}