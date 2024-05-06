<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
</head>
<body>

<?php
function funkcja($a,$b,$c,$d)
{
$arr = array();

    for ($i = $a; $i < $b; $i++) {
        for ($j = $c; $j < $d; $j++) {
            $arr[$i] = $j;
    }
}
return $arr;
}
$a=1;
$b=6;
$c=1;
$d=6;

$arr = funkcja($a,$b,$c,$d);

print_r($arr);
?>
</body>
