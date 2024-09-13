<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Преобразование температуры</title>
</head>
<body>
    <h2>Преобразование температуры из Цельсия в Фаренгейт</h2>
    <form method="post">
        <label for="celsius">Температура в градусах Цельсия:</label>
        <input type="number" name="celsius" id="celsius" required>
        <button type="submit">Преобразовать</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $celsius = $_POST['celsius'];
        $fahrenheit = $celsius * 9/5 + 32;
        echo "<p>$celsius °C равно $fahrenheit °F</p>";
    }
    ?>
</body>
</html>
