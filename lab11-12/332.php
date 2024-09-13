<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных

	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

	$task2 = "UPDATE users SET age = 35 WHERE id = 4";
	$task3 = "UPDATE users SET salary = 700 WHERE salary = 500";
	$task4 = "UPDATE users SET age = 23 WHERE id > 2 AND id <= 5";