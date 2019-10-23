<?php

//niikaua kui count on väiksem või võrdne maksimumist seni me teeme tehet

$maxValue = 100000000;
$count = 1;
$sum = 0;

while ($count <= $maxValue) {
    $elem = 1 / (2 * $count - 1);
    if ($count % 2 != 0) {
        $sum = $sum + $elem;
    } else {
        $sum = $sum - $elem;
    }
    $count++;
}

echo 'pi = ' . ($sum * 4) . '<br>';
echo 'pi = ' . pi();

