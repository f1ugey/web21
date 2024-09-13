<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");
    
	$task1 = "SELECT * FROM users LIMIT 4";
	$task2 = "SELECT * FROM users LIMIT 1, 3";
	$task3 = "SELECT * FROM users ORDER BY salary ASC LIMIT 3";
    $task4 = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";