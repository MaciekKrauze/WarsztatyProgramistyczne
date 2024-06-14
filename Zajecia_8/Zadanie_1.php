
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>

</head>
<body>
<form action="Zadanie_1.php" method="get">
    <label>Podaj tekst</label>
    <input type="text" name="text">
    <button type="submit">Submit</button>
</form>
<?php
if(isset($_GET["text"])){
    $a = $_GET["text"];
    echo strtolower($a) . " <br>";
    echo strtoupper($a) . " <br>";
    echo firstLetterUpper($a) . " <br>";
    echo ucwords(strtolower($a)) . " <br>";
}

function firstLetterUpper($a)
{
    $a = strtolower($a);
    $a[0] = strtoupper($a[0]);
    return $a;
}

?>
</body>
</html>