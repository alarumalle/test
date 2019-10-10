<?php

$age = -75;
echo 'Vanus = ' . $age . '<br>';
if ($age > 0 and $age < 18) {
    echo 'Oled laps.';
    //else if kui ta leiab vastuse esimesest if lausest, siis ta ei lähe edasi, et mitte süsteemi koormata.
} else if ($age > 17 and $age < 66) {
    echo 'Oled täiskasvanu.<br>';
} else if ($age > 65) {
    echo 'Oled seenior.<br>';
} else {
    echo 'Midagi on valesti.';
}