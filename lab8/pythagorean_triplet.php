<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка на тройку Пифагора</title>
</head>
<body>
    <h2>Проверка, являются ли числа тройкой Пифагора</h2>
    <form method="post">
        <label for="num1">Введите первое число:</label>
        <input type="number" name="num1" id="num1" required>
        <label for="num2">Введите второе число:</label>
        <input type="number" name="num2" id="num2" required>
        <label for="num3">Введите третье число:</label>
        <input type="number" name="num3" id="num3" required>
        <button type="submit">Проверить</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numbers = [$_POST['num1'], $_POST['num2'], $_POST['num3']];
        sort($numbers);
        if (pow($numbers[2], 2) == pow($numbers[0], 2) + pow($numbers[1], 2)) {
            echo "<p>Числа являются тройкой Пифагора.</p>";
        } else {
            echo "<p>Числа не являются тройкой Пифагора.</p>";
        }
    }
    ?>
</body>
</html>
