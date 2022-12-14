<?php
ini_set('error_reporting', E_ALL);

$numb0 = 1234; // десятичное число
$numb1 = +143; // десятичное число
$numb2 = -342; // отрицательное число
$numb3 = 0123; // восьмиричное число
$numb4 = 0x1A; // шестнадцатиричное число
// вещественные числа 
$var = 1.123;
// логический тип
// true
// false
// строчный тип
$str = "Hello, world - $numb0";
$str1 = 'Some text';
$str2 = 'Some text - \'34\'';
// неинициализированная переменная 
$some; // Notice
// специальный тип null
$var2 = null;
unset($str2, $str);
echo $numb0;

?>