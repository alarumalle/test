<?php

$numberOne = (int)$_GET['numberOne'];
$numberTwo = (int)$_GET['numberTwo'];

if (strlen($numberOne) > 0 and !empty($_GET[numberOne])) {
    if (strlen($numberTwo) > 0 and !empty($_GET[numberTwo]))
        echo 'andmed olemas';
} else {
    echo 'Tuleb sisestada molemad numbrid';
}