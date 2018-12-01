<?php

/**
 * 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
 */


$regions = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин',
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт',
    ],
    'Рязанская область' => [
        'Рязань',
        'Лесной',
        'Михайлов',
    ],
];

foreach ($regions as $obl => $cities) {
    echo sprintf('%s:'.PHP_EOL, $obl);

    $resultCity = [];
    foreach ($cities as $i => $city) {
        if (mb_substr($city, 0, 1) == 'К') {
            $resultCity[] = $city;
        }
    }
    if (count($resultCity)) {
        echo implode(',', $resultCity).'.'.PHP_EOL;
    } else {
        echo '-'.PHP_EOL;
    }

    echo PHP_EOL;
}