<?php

$jagatav = $_GET['jagatav'];
$jagaja = $_GET['jagaja'];

function jaga($jagatav, $jagaja)
{
    return $jagatav / $jagaja;
}

if ($jagatav == '' or $jagaja == '') {
    echo "Sisesta nii jagatav kui ka jagaja";
} else if ($jagaja == 0) {
    echo "Nulliga jagada ei tohi!";
} else {
    echo jaga($jagatav, $jagaja);
}
?>

