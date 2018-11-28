<?php
// PHP <= 5.3
$oldArrayStyle = array();

// PHP >= 5.4
$myArray = [];

$someVar = true;
$myArray[] = 1;
$myArray[] = 'Hello, world!';
$myArray[] = $someVar;
var_dump($myArray);
echo $myArray[1];


//print_r($myArray);
//var_dump($myArray[2]);


//$myArray['symbol'] = '±';
//$myArray[] = '§';
//$myArray[8] = 8;
//$myArray[] = 9;
//echo $myArray['symbol'];
//
//print_r($myArray);
//echo $myArray;