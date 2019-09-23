<?php
/*
 * Koosta programm, mis hoiab muutujatena järgmised andmed
 * Eesnimi
 * Perenimi
 * Vanus
 * Pikkus meetrites
 * Kaal kilogrammides
 * Väljasta kõik vajalik info ka!
 * */

$eesnimi = 'Kirill';
$pereNimi = 'Maftuljak';
$vanus = 19;
$pikkus = 1.78;
$kaal = 75;

echo '<h1>Minu andmed</h1>';
echo 'Eesnimi: '.$eesnimi.'<br>';
echo 'Perenimi: '.$pereNimi.'<br>';
echo 'Vanus: '.$vanus.'<br>';
echo 'Pikkus: '.$pikkus.'<br>';
echo 'Kaal: '.$kaal.'<br>';

//  arvutused
// $muutuja = väärtus
$kmi = $kaal / ($pikkus * $pikkus);
echo 'Minu kehamassiindeks: '.$kmi'.<br>';