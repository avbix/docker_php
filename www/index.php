<?php
// ��������� ����� ������������ � ������ ��� ����������� � MySQL.
$user = 'root';
$pass = 'root';

// ������������ ������ DSN (Data Source Name), ������� ��������� �� ������ � ���� ������ MySQL, � ����� ��������� ���������.
$dsn = 'mysql:host=mysql;dbname=information_schema;charset=utf8';

// �������� ���������� ������� PDO ��� ���������� � ����� ������.
$pdo = new PDO($dsn, $user, $pass);

// ���������� SQL-������� ��� ������� ������ �� ������� 'tables' � ���� ������ 'information_schema'.
$stmt = $pdo->query('SELECT * FROM tables');

// ���������� ������ ������ ���������� �������.
$row = $stmt->fetch();

// ����� ���������� ������� � ������� ������� print_r(), ����� ����������� ���������� ������.
print_r($row);
?>
