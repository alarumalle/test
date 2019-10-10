<?php
//if(!empty($_GET[‘name’])){

$numberOne = (int)$_GET['numberOne'];
$numberTwo = (int)$_GET['numberTwo'];

if (strlen($numberOne) > 0 or strlen($numberTwo) > 0)
    if ($numberTwo == 0) {
        echo 'Ei tohi jagada nulliga';
    } else {
        echo $numberOne / $numberTwo;
    } else {
    echo 'sisesta väärtused';
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


//if (strlen($numberOne) > 0 and !empty($_GET[numberOne])) {
//    if (strlen($numberTwo) > 0 and !empty($_GET[numberTwo]))
//        echo 'andmed olemas';
//} else {
//    echo 'Tuleb sisestada molemad numbrid';
//}