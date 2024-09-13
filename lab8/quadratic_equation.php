<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корни квадратного уравнения</title>
</head>
<body>
    <h2>Нахождение корней квадратного уравнения</h2>
    <form method="post">
        <label for="a">Введите коэффициент a:</label>
        <input type="number" name="a" id="a" required>
        <label for="b">Введите коэффициент b:</label>
        <input type="number" name="b" id="b" required>
        <label for="c">Введите коэффициент c:</label>
        <input type="number" name="c" id="c" required>
        <button type="submit">Найти корни</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = $b * $b - 4 * $a * $c;
        if ($discriminant > 0) {
            $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
            echo "<p>Уравнение имеет два корня: $root1 и $root2</p>";
        } elseif ($discriminant == 0) {
            $root = -$b / (2 * $a);
            echo "<p>Уравнение имеет один корень: $root</p>";
        } else {
            echo "<p>Уравнение не имеет действительных корней.</p>";
        }
    }
    ?>
</body>
</html>
