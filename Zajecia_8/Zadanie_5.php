
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 5</title>

</head>
<body>
<form action="Zadanie_3.php" method="get">
    <label>Podaj tekst</label>
    <input type="text" name="text">
    <button type="submit">Submit</button>
</form>
<?php
if(isset($_GET["text"])) {
    $a = $_GET["text"];
    if(is_numeric($a)){
        $b = 0;
        for ($i = 0; $i < strlen($a); $i++) {
            if($a[$i] == "."){
                break;
            }
            else{
                $b++;
            }
        }
        $b++;
        $c = 0;
        for ($j = $b; $j < strlen($a); $j++) {
            $c++;
        }
    }
    echo $c;
}
?>
</body>
</html>
