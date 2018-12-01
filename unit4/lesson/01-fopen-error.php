<?php

$file = fopen("myfile.txt","r");
if(!$file)
{
    echo("Ошибка открытия файла");
}