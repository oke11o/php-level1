<?php

function power($value, $power)
{
    if (!$value) {
        return 0;
    }
    if ($power == 1) {
        return $value;
    }
    if ($power < 0) {
        return power(1 / $value, -$power);
    }

    return $value * power($value, --$power);
}

$val = \random_int(-6, 6);
$pow = \random_int(-6, 6);
echo sprintf("%d ^ %d = %f", $val, $pow, power($val, $pow));