<?php
//circle_do.php
$circleRadius = $_GET['circle-radius'];

// sisu kontroll, mis on sisu, mis tyypi jms var_dump - midagi ei õnnestunud, browseris erines õp omast
//var_dump($circleRadius);
//$sum = $circleRadius + $circleRadius;
//var_dump($sum);

//arvutused

$circleArea = 3.14 * $circleRadius * $circleRadius;
$circleCircumference = 3.14 * 2 * $circleRadius;
// print

echo 'Raadius: ' . $circleRadius . '<br>';
echo '<hr>';
echo 'Ringi pindala = ' . $circleArea . '<br>';
echo 'Ringi ümbermõõt = ' . $circleCircumference . '<br>';