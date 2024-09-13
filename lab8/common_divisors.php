<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Общие делители двух чисел</title>
</head>
<body>
    <h2>Общие делители двух чисел</h2>
    <form method="post">
        <label for="number1">Введите первое число:</label>
        <input type="number" name="number1" id="number1" required>
        <label for="number2">Введите второе число:</label>
        <input type="number" name="number2" id="number2" required>
        <button type="submit">Показать общие делители</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        
        function getDivisors($num) {
            $divisors = [];
            for ($i = 1; $i <= $num; $i++) {
                if ($num % $i === 0) {
                    $divisors[] = $i;
                }
            }
            return $divisors;
        }

        function getCommonDivisors($num1, $num2) {
            $divisors1 = getDivisors($num1);
            $divisors2 = getDivisors($num2);
            return array_intersect($divisors1, $divisors2);
        }

        $commonDivisors = getCommonDivisors($number1, $number2);
        echo "<p>Общие делители чисел $number1 и $number2: " . implode(', ', $commonDivisors) . "</p>";
    }
    ?>
</body>
</html>
