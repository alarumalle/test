<?php
//circle_do.php
$circleRadius = $_GET['circle-radius'];

// sisu kontroll, mis on sisu, mis tyypi jms var_dump - midagi ei õnnestunud, browseris erines õp omast
//var_dump($circleRadius);
//$sum = $circleRadius + $circleRadius;
//var_dump($sum);

//arvutused

$circleArea = round(pi() * $circleRadius * $circleRadius, 3);
$circleCircumference = pi() * 2 * $circleRadius;
//ümardamine ja omistamine
//$circleAreaRounded = round($circleArea, 3);

//ümardamine ja ümber kirjutamine
$circleArea = round($circleArea, 3);
// print

echo 'Raadius: ' . $circleRadius . '<br>';
echo '<hr>';
echo 'Ringi pindala = ' . $circleArea . '<br>';
echo 'Ringi ümbermõõt = ' . round($circleCircumference, 3) . '<br>';