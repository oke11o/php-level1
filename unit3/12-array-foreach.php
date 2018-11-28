<?php

$myArray = [];
$someVar = true;
$myArray[] = 1;
$myArray[] = 'Hello, world!';
$myArray[] = $someVar;

foreach ($myArray as $my_value)
{
    echo("$my_key is $my_value <br/>\n");
}
