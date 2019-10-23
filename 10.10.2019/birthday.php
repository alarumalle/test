<?php

$birthYear = $_GET['birthYear'];

if (strlen($birthYear) > 0) {
    $age = 2019 - $birthYear;
    if (($age % 5) == 0) {
        echo 'Sul on juubel, oled ' . $age . ' aastat vana';
    } else {
        echo 'Sul on tavasünnipäev, sa oled' . $age . ' aastat vana';
    }
}

//http://alarumalle.ikt.khk.ee/PA/16.10.2019/birthday.php?birthYear=2000
// aadressiriba lõppu ? siis birthYear= ja siis mingi synniaasta (kui on rohkem asju sisestada siis & ja kohe uus
//nimetus=väärtus
