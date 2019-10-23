<?php

//for tsükkel tjm alg, tjm lopp ja suurendaja tjm++ või tjm--

for ($count = 1; $count <= 25; $count++) {
    echo $count;
    if ($count < 10) {
        echo '&nbsp; &nbsp;';
    } else {
        echo '&nbsp';
    }
    echo '*<br>';
}
