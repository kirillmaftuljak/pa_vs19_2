<?php

$numberFromUser = $_GET['Number'];
$number = 25;
if(strlen($numberFromUser) > 0) {
    // get the number is ok
    // compute the difference
    $diff = abs(number:$numberFromUser - $number);
} else {
    echo 'Tuleb pakkuda number!';
}
