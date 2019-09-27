<?php
$circleRadius = $_GET['circle-radius'];
// $circleRadius sisu kontroll
var_dump($circleRadius);

echo $circleRadius + $circleRadius;
// var_dump($sum);
// arvutused
$circleArea = 3.14 * $circleRadius * $circleRadius;
$circleCircumference = 3.14 * 2 * $circleRadius;
// print
echo 'Raadius = '.$circleRadius.'<br>';
echo '<hr>';
echo 'Ringi pindala = '.$circleArea.'<br>';
echo 'Ringi ymberm66t = '.$circleCircumference.'<br>';

