<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Расчет факториала</title>
</head>
<body>
    <h2>Расчет факториала числа</h2>
    <form method="post">
        <label for="number">Введите число:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Вычислить</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        function factorial($n) {
            return ($n === 0) ? 1 : $n * factorial($n - 1);
        }
        $result = factorial($number);
        echo "<p>Факториал числа $number равен $result</p>";
    }
    ?>
</body>
</html>
