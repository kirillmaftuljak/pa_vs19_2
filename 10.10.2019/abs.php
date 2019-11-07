<?php
/** file name abs.php */
// absolute value computing
// define variable
$number = 15;
// if number is negative
if($number < 0) {
    // $number = $number * -1;
    $abs = $number * -1;
} else {
    $abs = $number;
}
echo $number.' absoluutväärtus on'.$abs;