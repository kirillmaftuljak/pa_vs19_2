<?php

$birthYear = $_GET[`birthYear`];
$age = 2019-$birthYear;
if(strlen($birthYear) > 0) {
    $age = 2019-$birthYear;
    if($age % 5 == 0) {
        echo 'Sul on juubel, oled '.$age.' aastat vana';
    } else {
        echo 'Sul on tava synnip2ev, oled '.$age.' aastat vana';
    }
}