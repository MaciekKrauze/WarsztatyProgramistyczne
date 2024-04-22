<?php
function sumaCiągu($pierwszy, $różnicaIloraz, $liczbaElementów) {
    $sumArytm = 0;
    $sumGeom = 0;

    $sumArytm = ($liczbaElementów * ($pierwszy + ($pierwszy + ($liczbaElementów - 1) * $różnicaIloraz))) / 2;


    if ($różnicaIloraz != 0 && $różnicaIloraz != 1) {
        $sumGeom = $pierwszy * (1 - pow($różnicaIloraz, $liczbaElementów)) / (1 - $różnicaIloraz);
    } elseif ($różnicaIloraz == 1) {
        $sumGeom = $pierwszy * $liczbaElementów;
    } else {
        $sumGeom = $pierwszy;
    }


    echo "Suma ciągu arytmetycznego: " . $sumArytm . "<br>";
    echo "Suma ciągu geometrycznego: " . $sumGeom . "<br>";
}


$pierwszy = 2;
$różnicaIloraz = 3;
$liczbaElementów = 5;

sumaCiągu($pierwszy, $różnicaIloraz, $liczbaElementów);
