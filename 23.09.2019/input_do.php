<?php
$firstName = $_Get['firstName'];
$lastName = $_Get['lastName'];
$age = $_Get['age'];
$height = $_Get['height'];
$weight = $_Get['weight'];

echo '<h1>Minu andmed</h1>';
echo 'Eesnimi: '.$firstName.'<br>';
echo 'Perenimi: '.$lastName.'<br>';
echo 'Vanus: '.$age.'<br>';
echo 'Pikkus: '.$height.'<br>';
echo 'Kaal: '.$weight.'<br>';
$bmi = $weight / ($height * $height);
echo <b>.'$firstName.' '$lastName'.</b>, Sinu KMI on '.<br>';
echo '<br>';
echo '<a href="input.php">Proovi veel</a>'