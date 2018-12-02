<?php

$filename = "file.txt";
$file = fopen($filename, "r");

if (!$file) {
    echo("Ошибка открытия файла");
} else {
    $buffer = fread($file, filesize($filename));
    echo $buffer;
    fclose($file);
}
