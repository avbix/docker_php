<?php
// Установка имени пользователя и пароля для подключения к MySQL.
$user = 'root';
$pass = 'root';

// Формирование строки DSN (Data Source Name), которая указывает на сервер и базу данных MySQL, а также указывает кодировку.
$dsn = 'mysql:host=mysql;dbname=information_schema;charset=utf8';

// Создание экземпляра объекта PDO для соединения с базой данных.
$pdo = new PDO($dsn, $user, $pass);

// Выполнение SQL-запроса для выборки данных из таблицы 'tables' в базе данных 'information_schema'.
$stmt = $pdo->query('SELECT * FROM tables');

// Извлечение первой строки результата запроса.
$row = $stmt->fetch();

// Вывод результата запроса с помощью функции print_r(), чтобы просмотреть содержимое строки.
print_r($row);
?>
