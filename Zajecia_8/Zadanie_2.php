
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2</title>

</head>
<body>
<form action="Zadanie_2.php" method="get">
    <label>Podaj tekst</label>
    <input type="text" name="text">
    <button type="submit">Submit</button>
</form>
<?php
if(isset($_GET["text"])) {
    $a = $_GET["text"];
    $b = ["\\ ", "/", ":", "?", "<", ">", "|", "+", "-", "."];

    $a = str_replace($b, "", $a);
    echo htmlspecialchars($a);
}
?>
</body>
</html>
