<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
    <link rel="stylesheet" href="Zadanie_3.css">
</head>
<body>
<div class="container">
    <h2>Operacje na ciągach znaków</h2>
    <form method="post">
        <label for="inputText">Podaj ciąg znaków:</label>
        <input type="text" id="inputText" name="inputText" required>

        <label for="operation">Wybierz operację:</label>
        <select id="operation" name="operation" required>
            <option value="reverse">Odwrócenie ciągu znaków</option>
            <option value="uppercase">Zamiana wszystkich liter na wielkie</option>
            <option value="lowercase">Zamiana wszystkich liter na małe</option>
            <option value="length">Liczenie liczby znaków</option>
            <option value="trim">Usuwanie białych znaków z początku i końca ciągu</option>
        </select>

        <button type="submit">Wykonaj</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputText = $_POST['inputText'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'reverse':
                $result = strrev($inputText);
                break;
            case 'uppercase':
                $result = strtoupper($inputText);
                break;
            case 'lowercase':
                $result = strtolower($inputText);
                break;
            case 'length':
                $result = strlen($inputText);
                break;
            case 'trim':
                $result = trim($inputText);
                break;
            default:
                $result = 'Nieznana operacja';
                break;
        }

        echo "<div class='result'><strong>Wynik:</strong> " . htmlspecialchars($result) . "</div>";
    }
    ?>
</div>
</body>
</html>