<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

	$task1 = "SELECT * FROM users ORDER BY salary ASC";
	$task2 = "SELECT * FROM users ORDER BY salary DESC";
	$task3 = "SELECT * FROM users ORDER BY name";
	$task4 = "SELECT * FROM users WHERE salary = 500 ORDER BY age";
	$task5 = "SELECT * FROM users WHERE salary = 500 ORDER BY name, salary";