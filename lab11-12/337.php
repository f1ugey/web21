<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");
    
    $task1 = "SELECT COUNT(*) AS count FROM users WHERE salary = 300";
    $res = mysqli_query($link, $task1) or die(mysqli_error($link));
    $data = mysqli_fetch_assoc($res);
    echo $data['count'] . " пользователей с зарплатой 300<br>";

    $task2 = "SELECT COUNT(*) AS count FROM users WHERE salary = 300 OR age = 23";
    $res = mysqli_query($link, $task2) or die(mysqli_error($link));
    $data = mysqli_fetch_assoc($res);
    echo $data['count'] . " пользователей с зарплатой 300 или возрастом 23<br>";