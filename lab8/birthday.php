<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Дни до дня рождения</title>
</head>
<body>
    <h2>Сколько дней осталось до вашего дня рождения</h2>
    <form method="post">
        <label for="birthdate">Введите вашу дату рождения (формат: дд.мм.гггг):</label>
        <input type="text" name="birthdate" id="birthdate" required pattern="\d{2}\.\d{2}\.\d{4}">
        <button type="submit">Узнать</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $birthdate = DateTime::createFromFormat('d.m.Y', $_POST['birthdate']);
        $currentYear = date('Y');
        $nextBirthday = DateTime::createFromFormat('d.m.Y', $birthdate->format('d.m.') . $currentYear);
        if ($nextBirthday < new DateTime()) {
            $nextBirthday->modify('+1 year');
        }
        $interval = $nextBirthday->diff(new DateTime());
        echo "<p>До вашего следующего дня рождения осталось " . $interval->days . " дней.</p>";
    }
    ?>
</body>
</html>
