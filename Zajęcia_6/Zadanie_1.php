<?php

wypisywanie(1,100);



function wypisywanie($min, $max) {

    for ($i = $min; $i <= $max; $i++) {
        $x = true;

        if ($i > 1) {

            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $x = false;
                    break;
                }
            }
            if ($x) {
                echo $i . " ";
            }
        }
    }
}



?>
