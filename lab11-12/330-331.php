<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

	$task330 = "INSERT INTO users (name, age, salary) VALUES ('user7', 26, 300)"
	$task331 = "INSERT INTO users (name) VALUES ('xxxx')";;
