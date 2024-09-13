<?php
// №1. Функция, возвращающая массив делителей числа
function getDivisors($number) {
    $divisors = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}

// Пример использования:
print_r(getDivisors(12)); // Вывод: [1, 2, 3, 4, 6, 12]
echo "<br><br>";

// №2. Функция, возвращающая массив общих делителей двух чисел
function getCommonDivisors($number1, $number2) {
    $divisors1 = getDivisors($number1);
    $divisors2 = getDivisors($number2);
    return array_intersect($divisors1, $divisors2);
}

// Пример использования:
print_r(getCommonDivisors(12, 18)); // Вывод: [1, 2, 3, 6]
echo "<br><br>";

// №3. Функция, возвращающая сумму цифр числа
function getDigitsSum($number) {
    return array_sum(str_split($number));
}

// Пример использования:
echo getDigitsSum(123); // Вывод: 6
echo "<br><br>";

// №4. Функция, возвращающая текущий день недели словом
function getCurrentDayOfWeek() {
    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    return $days[date('w')];
}

// Пример использования:
echo getCurrentDayOfWeek(); // Вывод: Текущий день недели (например, "Среда")
echo "<br><br>";

// №5. Функция, возвращающая день недели по заданной дате
function getDayOfWeek($date) {
    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    $timestamp = strtotime($date);
    return $days[date('w', $timestamp)];
}

// Пример использования:
echo getDayOfWeek('2024-09-13'); // Вывод: День недели для заданной даты (например, "Пятница")
echo "<br><br>";

// №6. Функция, возвращающая количество суток, соответствующих секундам
function secondsToDays($seconds) {
    return floor($seconds / 86400); // 86400 секунд в сутках
}

// Пример использования:
echo secondsToDays(172800); // Вывод: 2
echo "<br><br>";

// №7. Функция, проверяющая, является ли год високосным
function isLeapYear($year) {
    return ($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0);
}

// Пример использования:
echo isLeapYear(2024) ? 'Високосный' : 'Не високосный'; // Вывод: "Високосный"
echo "<br><br>";

// №8. Функция, проверяющая, является ли число простым
function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) return false;
    }
    return true;
}

// Пример использования:
echo isPrime(17) ? 'Простое' : 'Не простое'; // Вывод: "Простое"
?>
