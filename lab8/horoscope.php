<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гороскоп</title>
</head>
<body>
    <h2>Гороскоп</h2>
    <form method="post">
        <label for="dob">Дата рождения (в формате дд.мм.гггг):</label>
        <input type="text" name="dob" id="dob" required>
        <button type="submit">Показать гороскоп</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dob = $_POST['dob'];
        $dobDate = DateTime::createFromFormat('d.m.Y', $dob);
        if ($dobDate) {
            $month = $dobDate->format('m');
            $day = $dobDate->format('d');

            // Пример массива гороскопов
            $horoscopes = [
                'Овен' => 'Сегодня вам следует проявить инициативу.',
                'Телец' => 'Сосредоточьтесь на своих финансовых планах.',
                'Близнецы' => 'Подумайте о новых начинаниях.',
                'Рак' => 'Обратите внимание на здоровье.',
                'Лев' => 'Будьте уверены в себе.',
                'Дева' => 'Будьте осторожны с новыми знакомствами.',
                'Весы' => 'Сделайте акцент на отношениях.',
                'Скорпион' => 'Подумайте о своих целях.',
                'Стрелец' => 'Занимайтесь любимым хобби.',
                'Козерог' => 'Работайте над своим профессиональным ростом.',
                'Водолей' => 'Отдохните и расслабьтесь.',
                'Рыбы' => 'Заботьтесь о близких.',
            ];

            // Определение знака зодиака
            function getZodiacSign($month, $day) {
                if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) return 'Водолей';
                if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) return 'Рыбы';
                if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) return 'Овен';
                if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) return 'Телец';
                if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) return 'Близнецы';
                if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) return 'Рак';
                if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) return 'Лев';
                if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) return 'Дева';
                if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) return 'Весы';
                if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) return 'Скорпион';
                if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) return 'Стрелец';
                if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) return 'Козерог';
            }

            $zodiacSign = getZodiacSign($month, $day);
            $horoscope = $horoscopes[$zodiacSign] ?? 'Гороскоп отсутствует для вашего знака.';
            echo "<p>Ваш знак зодиака: $zodiacSign</p>";
            echo "<p>Гороскоп на сегодня: $horoscope</p>";
        } else {
            echo "<p>Неверный формат даты. Используйте дд.мм.гггг.</p>";
        }
    }
    ?>
</body>
</html>
