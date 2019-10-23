<?php
//if(!empty($_GET[‘name’])){

$numberOne = (int)$_GET['numberOne'];
$numberTwo = (int)$_GET['numberTwo'];
var_dump($numberOne);
var_dump($numberTwo);


if (strlen($numberOne) > 0 or strlen($numberTwo) > 0)
    if ($numberTwo != 0) {
        echo $numberOne . '/' . $numberTwo . ' = ' . $numberOne / $numberTwo;
    } else {
        echo 'nulliga jagamine keelatud';
    } else {
    echo 'sisesta väärtused';
}


if (strLen($numberOne) > 0 and strlen($numberTwo) > 0) {
    if ($numberOne > $numberTwo) {
        echo 'suurem';
    } elseif ($numberOne < $numberTwo) {
        echo 'väiksem';
    } else {
        echo 'võrdne';
    }
}


//
//if(strlen($numberOne) > 0 or strlen($numberTwo) > 0)
//    if ($numberTwo == 0){
//        echo 'Ei tohi jagada nulliga';
//    } else {
//        echo $numberOne/$numberTwo;
//    } else {
//    echo 'sisesta väärtused';
//}

?>


