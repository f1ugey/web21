<meta charset="utf-8">
<?php
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'mydb';      // имя базы данных
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");

    $task1 = "SELECT * FROM users WHERE age > 25 AND age <= 28";
	$task2 = "SELECT * FROM users WHERE name='user1'";
	$task3 = "SELECT * FROM users WHERE name='user1' OR name='user2'";
	$task4 = "SELECT * FROM users WHERE name!='user3'";
	$task5 = "SELECT * FROM users WHERE age=27 OR salary=1000";
	$task6 = "SELECT * FROM users WHERE age=27 OR salary!=400";
	$task7 = "SELECT * FROM users WHERE (age >= 23 AND age < 27) OR salary=1000";
	$task8 = "SELECT * FROM users WHERE (age >= 23 AND age <= 27) OR (salary >= 400 AND salary <= 1000)";