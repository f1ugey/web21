<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список делителей числа</title>
</head>
<body>
    <h2>Список делителей числа</h2>
    <form method="post">
        <label for="number">Введите число:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Показать делители</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        function getDivisors($num) {
            $divisors = [];
            for ($i = 1; $i <= $num; $i++) {
                if ($num % $i === 0) {
                    $divisors[] = $i;
                }
            }
            return $divisors;
        }
        $divisors = getDivisors($number);
        echo "<p>Делители числа $number: " . implode(', ', $divisors) . "</p>";
    }
    ?>
</body>
</html>
