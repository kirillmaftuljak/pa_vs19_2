<?php
$circleRadius = $_GET['circle-radius'];
// $circleRadius sisu kontroll
//var_dump($circleRadius);

echo $circleRadius + $circleRadius;
// var_dump($sum);
// arvutused
$circleArea = pi() * $circleRadius * $circleRadius;
$circleCircumference = pi() * 2 * $circleRadius;
// ymmardamine
$circleAreaRounded = round($circleArea, 3);
// print
echo 'Raadius = '.$circleRadius.'<br>';
echo '<hr>';
echo 'Ringi pindala = '.$circleArea.'<br>';
echo 'Ringi ymberm66t = '.$circleCircumference.'<br>';

