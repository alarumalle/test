<?php
//kodune töö, Ülesanne 2, 10.10.2019
//F=(9/5)*C+32

$kraad_C = $_GET['celsiusKraad'];

$teisendus = (9 / 5) * $kraad_C + 32;

printf('%s kraadi Celsiuse skaalal on %s Farenheiti skaalal.', $kraad_C, $teisendus);
//echo '100 kraadi Celsiuse skaalal on ' . $teisendus . ' Farenheiti skaalal.';
