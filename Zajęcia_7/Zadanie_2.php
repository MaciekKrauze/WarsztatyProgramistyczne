<?php

function modifyArray($array, $n) {
    if ($n < 0 || $n >= count($array)) {
        return "BŁĄD: Niepoprawna pozycja n.";
    }

    $modifiedArray = [];

    foreach ($array as $key => $value) {
        if ($key == $n) {
            $modifiedArray[] = '$';
        }
        $modifiedArray[] = $value;
    }

    return $modifiedArray;
}

$inputArray = [1, 2, 3, 4, 5];
$position = 2;

$result = modifyArray($inputArray, $position);
if (is_array($result)) {
    echo "Tablica po modyfikacji:\n";
    print_r($result);
} else {
    echo $result;
}

?>
