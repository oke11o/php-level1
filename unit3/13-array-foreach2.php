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

foreach ($users as $user) {
    echo sprintf('User (');
    foreach ($user as $field => $value) {
        echo sprintf(' field "%s"="%s";', $field, $value);
    }
    echo ' )'.PHP_EOL;
}
