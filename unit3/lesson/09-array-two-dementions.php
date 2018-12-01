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

print_r($users);
