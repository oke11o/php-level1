<?php

/**
 * часов - 0, 5-20
 * час - 1, 21
 * часа - 2-4, 22-24
 *
 * минут - 0, 5-20, 25-30, 35-40, 45-50, 55-59
 * минута - 1, 21, 31, 41, 51
 * минуты - 2-4, 22-24, 32-34, 42-44, 52-54
 *
 */


function getDeclension($number, $declension0, $declension1, $declension2)
{
    if ($number >= 11 and $number <= 19) {
        return $declension0;
    }
    $rem = $number % 10;
    if ($rem == 1) {
        return $declension1;
    }
    if ($rem >= 2 and $rem <= 4) {
        return $declension2;
    }

    return $declension0;
}

function plurMinutes($number)
{
    $declension = getDeclension($number, 'минут', 'минута', 'минуты');

    return $number.' '.$declension;
}

function plurHours($number)
{
    $declension = getDeclension($number, 'часов', 'час', 'часа');

    return $number.' '.$declension;
}


$hours = (int)date('G');
$minutes = (int)date('i');
//$hours = \random_int(0, 23);
//$minutes = \random_int(0, 59);

echo plurHours($hours).PHP_EOL;
echo plurMinutes($minutes).PHP_EOL;

