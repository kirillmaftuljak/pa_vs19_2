<?php
/** file name: pesons.php */
// define variables
$age = 64;
echo 'Vanus = '.$age.'<br>';
if($age > 0 and $age < 18) {
// 0 - 17 Laps
    echo 'Oled laps<br>';
}
// 18-65 taiskasvanu
if($age > 17 and $age < 66) {
    echo 'Olen taiskasvanu';
}
// 66 > - senioor
echo '';
if($age > 65) {
    echo 'Olen senioor';
} else {
    echo 'midagi on valesti';
}


if($age > 0 and $age < 18) {
    echo'';
} else {

};