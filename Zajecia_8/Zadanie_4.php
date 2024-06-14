
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 4</title>

</head>
<body>
<form action="Zadanie_4.php" method="get">
    <label>Podaj tekst</label>
    <input type="text" name="text">
    <button type="submit">Submit</button>
</form>
<?php
if(isset($_GET["text"])) {
    $a = $_GET["text"];
    $b = ["a", "e", "i", "o", "u"];
    $count = 0;
    for ($i = 0; $i < strlen($a); $i++) {
        for ($j = 0; $j < count($b); $j++) {
            if ($a[$i] == $b[$j]){
                $count++;
            }
        }
    }
    echo $count;
}
?>
</body>
</html>
