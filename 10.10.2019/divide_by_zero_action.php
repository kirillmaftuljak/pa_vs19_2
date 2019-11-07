<?php

$numberOne = (int)$_GET['numberOne'];
$numberTwo = (int)$_GET['numberTwo'];
var_dump($numberOne);
var_dump($numberTwo);
if(strlen($numberOne) or strlen($numberTwo)){
    if($numberOne == 0){
        echo 'ei tohi jagada 0-ga';
    } else {
        echo $numberOne / $numberTwo;
    }
}