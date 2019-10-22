<?php

$kylga = $_GET["kylg1"];
$kylgb = $_GET["kylg2"];
function kontroll($vaartus)
{
    if (!is_numeric($vaartus)) {
        echo 'külg ' . $vaartus . ' peab olema number<br>';
        $result = false;
    } else if ($vaartus == '' or $vaartus == 0 or $vaartus < 0) {
        echo 'Sisesta kolmnurga kylje väärtus, mis on positiivne arv<br>';
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}

function kolmnurk($kylga, $kylgb)
{
    return round(sqrt(pow($kylga, 2) + pow($kylgb, 2)), 2);
}


if (kontroll($kylga) or kontroll($kylgb)) {
    echo 'Kolmnurga kolmas kylg on: ', kolmnurk($kylga, $kylgb), ' cm';

} else {
    echo 'Kontrolli vaartused!';
}
echo "<br>";
?>

