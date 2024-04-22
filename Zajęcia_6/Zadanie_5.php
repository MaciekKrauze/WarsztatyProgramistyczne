<?php
function czyPangram($tekst) {
    $tekst = strtolower(str_replace(' ', '', $tekst));

    for ($i = 97; $i <= 122; $i++) {
        $znak = chr($i);
        if (strpos($tekst, $znak) === false) {
            return false;
        }
    }

    return true;
}


$tekst = "The quick brown fox jumps over the lazy dog.";
$tekst1 = "Coś innego";
echo czyPangram($tekst) ? "true" : "false";
echo czyPangram($tekst1) ? "true" : "false";