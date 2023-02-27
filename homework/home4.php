<?php

// Функция, которая принимает элементы массива
// 1-е задание
$my_friends = ['Andrew', 'Vladimir', 'Vlad', 'Anton', 'Igor'];

// 2-е задание
echo "Hello, $my_friends[1]! How are you? <br>";

// Функция для вычисления математических операций
// 3-е задание
function getNumbers($x = 6, $y = 4) {
    $res = $x * $y;
    return $res; // Выводит результат наружу функции
}
echo getNumbers() . "<br>";
//echo getNumbers(20) . "<br>";
//echo getNumbers(5, 10) . "<br>";




?>