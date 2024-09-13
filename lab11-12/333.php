<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных

	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

    $task1 = "DELETE FROM users WHERE id = 7";
	$task2 = "DELETE FROM users WHERE age = 23";
	$task3 = "DELETE FROM users" //TRUNCATE TABLE users?;