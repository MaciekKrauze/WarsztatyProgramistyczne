<?php
$arr = array("Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki",
    "France" => "Paris",
    "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon",
    "Spain"=>"Madrid",
    "Sweden"=>"Stockholm",
    "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin",
    "Hungary"=>"Budapest",
    "Latvia"=>"Riga","Malta"=>"Valetta",
    "Austria" => "Vienna",
    "Poland"=>"Warsaw");

function sortArray($arr) {
    uasort($arr, function($a, $b) {
        return strcmp($a, $b);
    });

    return $arr;
}


echo "Tablica przed sortowaniem:\n";
print_r($arr);


$arr = sortArray($arr);

echo "\n";
echo "Tablica po sortowaniu:\n";
print_r($arr);