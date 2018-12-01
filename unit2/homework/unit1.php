<?php


$a = \random_int(-15, 15);
$b = \random_int(-15, 15);

echo sprintf('$a = %d; $b = %d'.PHP_EOL, $a, $b);

if ($a >= 0 && $b >= 0) {
    $operation = 'Разность';
    $c = $a - $b;
} elseif ($a < 0 && $b < 0) {
    $operation = 'Произведение';
    $c = $a * $b;
} else {
    $operation = 'Сумма';
    $c = $a + $b;
}

echo sprintf('%s=%d'.PHP_EOL, $operation, $c);