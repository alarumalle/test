<?php

//https://github.com/AnnaKarutina/pa_vs19_2

$eesNimi = "Malle";
$pereNimi = "Alaru";
$vanus = "100";
$pikkusM = "1.66";
$kaalKG = "58";

echo "<h1>Minu andmed</h1><br>";
echo "Nimi: " . $eesNimi . " " . $pereNimi . "<br>";
echo "Vanus: " . $vanus . "<br>";
echo "Pikkus: " . $pikkusM . "<br>";
echo "Kaal: " . $kaalKG . "<br>";

// arvutused
// $muutuja = väärtus;

$kmi = $kaalKG / ($pikkusM * $pikkusM);

echo "Kehamassiindeks: " . $kmi . "<br>";