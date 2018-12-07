<?php
/**
 * http://php.net/manual/ru/book.mysqli.php
 */

$mysqli = mysqli_connect('localhost', 'root', '', 'geekbrains');

$stmt = mysqli_query($mysqli, "SELECT * FROM employee WHERE id_employee<18 ORDER BY first_name DESC;");

$employees = [];

while ($row = mysqli_fetch_assoc($stmt)) {
    $employees[] = $row;
}

mysqli_close($mysqli);


print_r($employees);