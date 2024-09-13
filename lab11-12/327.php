<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

    $task1 = "SELECT * FROM users WHERE id=3";
	$task2 = "SELECT * FROM users WHERE salary=900";
	$task3 = "SELECT * FROM users WHERE age=23";
	$task4 = "SELECT * FROM users WHERE salary>400";
	$task5 = "SELECT * FROM users WHERE salary>=500";
	$task6 = "SELECT * FROM users WHERE salary!=500";
	$task7 = "SELECT * FROM users WHERE salary<=500";