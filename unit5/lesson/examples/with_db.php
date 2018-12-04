<?php
/**
 * http://php.net/manual/ru/book.mysqli.php
 */

$mysqli = mysqli_connect('localhost', 'root', 'root', 'geekbrains');


$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE id_employee<4;");
var_dump($result);

$employees = [];

while ($row = mysqli_fetch_assoc($result)) {
    var_dump($row);
    $employees[] = $row;
}

mysqli_close($mysqli);