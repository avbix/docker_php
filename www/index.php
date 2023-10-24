<?php
// Setting the username and password for connecting to MySQL.
$user = 'root';
$pass = 'root';

// Creating a Data Source Name (DSN) that specifies the MySQL server, database, and character encoding.
$dsn = 'mysql:host=mysql;dbname=information_schema;charset=utf8';

// Creating an instance of the PDO (PHP Data Objects) class to establish a database connection.
$pdo = new PDO($dsn, $user, $pass);

// Executing an SQL query to retrieve data from the 'tables' table in the 'information_schema' database.
$stmt = $pdo->query('SELECT * FROM tables');

// Fetching the first row of the query result.
$row = $stmt->fetch();

// Printing the result of the query using the print_r() function to inspect the contents of the row.
print_r($row);
?>
