<?php

$kylga = $_GET["kylg1"];
$kylgb = $_GET["kylg2"];
function kolmnurk($kylga, $kylgb)
{
    return round(sqrt(pow($kylga, 2) + pow($kylgb, 2)), 2);
}

if ($kylga == '' or $kylgb == '' or $kylga == 0 or $kylgb == 0 or $kylga < 0 or $kylgb < 0) {
    echo 'Sisesta kaks kolmnurga kylge, mis on positiivsed arvud';
} else {
    echo 'Kolmnurga kolmas kylg on: ', kolmnurk($kylga, $kylgb), ' cm';
}
echo "<br>";

?>

