<?php

$numberOne = $_GET['numberOne'];
$numberTwo = $_GET['numberTwo'];
if(strlen($numberOne) > 0 and strlen($numberTwo) > 0){
  if($numberTwo != 0) {
    echo $numberOne.' / '.$numberTwo.' = '.round($numberOne / $numberTwo, 3);
  } else {
    echo 'Nulliga jagamine keelatud';
  }
} else {
  echo 'Sisesta kõik väärtused';
}


/*
if (strlen($numberOne) > 0 or strlen($numberTwo) > 0)
    if ($numberTwo != 0) {
        echo $numberOne . '/' . $numberTwo . ' = ' . $numberOne / $numberTwo;
    } else {
        echo 'nulliga jagamine keelatud';
    } else {
    echo 'sisesta väärtused';
}
*/

/*
if (strLen($numberOne) > 0 and strlen($numberTwo) > 0) {
    if ($numberOne > $numberTwo) {
        echo 'suurem';
    } elseif ($numberOne < $numberTwo) {
        echo 'väiksem';
    } else {
        echo 'võrdne';
    }
}
*/


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


