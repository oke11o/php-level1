<?php


$users = [];
$users[] = [
    'name' => 'Alex',
    'email' => 'alex@example.com',
];
$users[] = [
    'name' => 'George',
    'email' => 'george@domain.ru',
    'additionalData' => 'Всем привет!',
];
$users[] = [
    'name' => 'Michael',
    'email' => 'mich@test.com',
];

for ($i = 0; $i < count($users); $i++)
{
    print_r($users[$i]);
    echo PHP_EOL;
}
