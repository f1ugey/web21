<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");
	
    echo "318<br>";
	$query = 'SELECT * FROM users';
	$res = mysqli_query($link, $query) or die(mysqli_error($link));
	var_dump($res);
    echo "<br><br>";

    #324
    echo "324<br>";
    $row = mysqli_fetch_assoc($res);
	var_dump($row);
    echo "<br><br>";
    
    $data;

    #326
    echo "326<br>";
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
	var_dump($data);
    echo "<br><br>";

    // Вывод имени первого работника
    $firstEmployee = $data[0];
    echo $firstEmployee['name'];
    echo "<br>";
    // Вывод имени и возраста второго работника
    $secondEmployee = $data[1];
    echo $secondEmployee['name'] . ", " . $secondEmployee['age'];
    echo "<br>";
    // Вывод имени, возраста и зарплаты третьего работника
    $thirdEmployee = $data[2];
    echo $thirdEmployee['name'] . ", " . $thirdEmployee['age'] . ", " . $thirdEmployee['salary'];
    echo "<br><br>";

    