<?php

echo sprintf('Сумма чисел %d и %d = %d <br/>'.PHP_EOL, 7, 8, mathOperation(7, 8, 'sum'));
echo sprintf('Разность чисел %d и %d = %d <br/>'.PHP_EOL, 7, 8, mathOperation(7, 8, 'sub'));
echo sprintf('Произведение чисел %d и %d = %d <br/>'.PHP_EOL, 7, 8, mathOperation(7, 8, 'mult'));
echo sprintf('Деление чисел %d и %d вернуло "%s" <br/>'.PHP_EOL, 7, 2, mathOperation(7, 2, 'div'));
echo sprintf('Передали операцию "asf" -  "%s" <br/>'.PHP_EOL, mathOperation(7, 8, 'asf'));

function sum($x, $y)
{
    return $x + $y;
}

function sub($x, $y)
{
    return $x - $y;
}

function mult($x, $y)
{
    return $x * $y;
}

function div($x, $y)
{
    if ($y == 0) {
        return 'Деление на ноль невозможно.';
    }

    return $x / $y;
}

function mathOperation($a, $b, $op = '')
{
    switch ($op) {
        case 'sum':
            return sum($a, $b);
        case 'sub':
            return sub($a, $b);
        case 'mult':
            return mult($a, $b);
        case 'div':
            return div($a, $b);
//        default:
//            return false;
    }

    return sprintf('Неизвестная операция "%s"', $op);
}