<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Анализ текста</title>
</head>
<body>
    <h2>Анализ текста: количество слов и символов</h2>
    <form method="post">
        <label for="text">Введите текст:</label><br>
        <textarea name="text" id="text" rows="5" cols="30" required></textarea><br>
        <button type="submit">Анализировать</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $text = $_POST['text'];
        $wordCount = str_word_count($text);
        $charCount = mb_strlen($text);
        echo "<p>Количество слов: $wordCount</p>";
        echo "<p>Количество символов: $charCount</p>";
    }
    ?>
</body>
</html>
