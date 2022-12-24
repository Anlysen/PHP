<?php

$var = "some text";
$num = 123;

// isset() empty()

$status = isset($var, $num, $ppp); // если переменная есть = true

// если нет переменной, пустая строка, "0", null, false = true
$status2 = empty($num); 

$str = "0";
// проверка существования переменной
if (isset($str)){
    // echo "Переменная $str существует" . "<br>";
}
if (empty($str)){
    // echo "Переменная $str пустая" . "<br>";
}
// Определяет тип переменной
$flo = 121.35;
// echo is_int($flo);

// echo gettype($flo);
/*
Типы данных : boolean, integer, double, string, array, object, resource, null, unknown type
*/


?>