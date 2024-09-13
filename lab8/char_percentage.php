<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Процентное содержание символов</title>
</head>
<body>
    <h2>Процентное содержание каждого символа в тексте</h2>
    <form method="post">
        <label for="text">Введите текст:</label><br>
        <textarea name="text" id="text" rows="5" cols="30" required></textarea><br>
        <button type="submit">Рассчитать</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $text = $_POST['text'];
        $totalChars = mb_strlen($text);
        $charCounts = array_count_values(mb_str_split($text));
        
        foreach ($charCounts as $char => $count) {
            $percentage = ($count / $totalChars) * 100;
            echo "<p>Символ '$char' встречается с частотой $percentage%</p>";
        }
    }
    ?>
</body>
</html>
