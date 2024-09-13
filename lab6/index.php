<?php
// #1 Увеличение зарплаты на 10% для всех сотрудников
$employees = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];

foreach ($employees as &$salary) {
    $salary *= 1.1;
}

// #2 Увеличение зарплаты на 10% для сотрудников с зарплатой до 400
$staff = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];

foreach ($staff as &$wage) {
    if ($wage <= 400) {
        $wage *= 1.1;
    }
}

// #3 Вычисление отношения суммы ключей к сумме значений
$data = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sumKeys = array_sum(array_keys($data));
$sumValues = array_sum($data);
$ratio = $sumKeys / $sumValues;

// #4 Разделение массива на ключи и значения
$letters = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrayKeys = array_keys($letters);
$arrayValues = array_values($letters);

// #5 Фильтрация массива по первой цифре значений
$numbers = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];

$filtered = [];

foreach ($numbers as $index => $num) {
    $firstChar = substr((string)$num, 0, 1);
    if ($firstChar === '1' || $firstChar === '2') {
        $filtered[$index] = $num;
    }
}

// #6 Вывод чисел от 1 до 100
for ($j = 1; $j <= 100; $j++) {
    echo $j . "<br>";
}
echo "<br><br>";

// #7 Вывод чисел от 100 до 1
for ($j = 100; $j >= 1; $j--) {
    echo $j . "<br>";
}
echo "<br><br>";

// #8 Вывод чётных чисел от 2 до 100
for ($j = 2; $j <= 100; $j += 2) {
    echo $j . "<br>";
}
echo "<br><br>";

// #9 Создание массива из 10 элементов, каждый из которых 'x'
$xArray = [];
for ($i = 0; $i < 10; $i++) {
    $xArray[] = 'x';
}
print_r($xArray);
echo "<br><br>";

// #10 Создание массива с числами от 1 до 10
$numArray = [];
for ($i = 1; $i <= 10; $i++) {
    $numArray[] = $i;
}
print_r($numArray);
echo "<br><br>";

// #11 Вывод чисел массива, которые больше 0 и меньше 10
$values = [1, 2, 4, 8, 12, -1];
foreach ($values as $val) {
    if ($val > 0 && $val < 10) {
        echo $val . "<br>";
    }
}
echo "<br><br>";

// #12 Проверка наличия элемента со значением 5
$nums = [1, 2, 3, 4, 5];
$isFound = false;
foreach ($nums as $num) {
    if ($num === 5) {
        $isFound = true;
        break;
    }
}
echo $isFound ? "Есть элемент со значением 5 <br>" : "Нет элемента со значением 5 <br>";
echo "<br><br>";

// #13 Вычисление суммы всех элементов массива
$toSum = [1, 2, 3, 4, 5];
$total = 0;
foreach ($toSum as $item) {
    $total += $item;
}
echo "$total";
echo "<br><br>";

// #14 Вычисление суммы квадратов всех элементов массива
$numsToSquare = [1, 2, 3, 4, 5];
$sumOfSquares = 0;
foreach ($numsToSquare as $num) {
    $sumOfSquares += $num * $num;
}
echo "$sumOfSquares";
echo "<br><br>";

// #15 Вычисление среднего арифметического элементов массива
$averageArray = [1, 2, 3, 4, 5];
$averageValue = array_sum($averageArray) / count($averageArray);
echo "$averageValue";
echo "<br><br>";

// #16 Вычисление факториала числа
function computeFactorial($n) {
    return $n === 0 ? 1 : $n * computeFactorial($n - 1);
}
$factorialResult = computeFactorial(10);
echo "$factorialResult";
?>
