<?php

//include;
//require;
//include_once;
//require_once;

$file = fopen("file.txt","r");
if(!$file)
{
    echo("Ошибка открытия файла");
}