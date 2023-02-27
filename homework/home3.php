<?php


// 1-е задание
// Создание функций, которые делают и возвращают значение

function Addition($a, $b) { // Тут идут параметры функции
    $gets = $a + $b;
    return $gets;
}
echo Addition(11, 10) . "<br>"; // Аргументы

function Subtraction($c, $d) {
    $bill = $c - $d;
    return $bill;
}
echo Subtraction(50, 10) . "<br>";

function Multiplication($e, $f) {
    $sum = $e * $f;
    return $sum;
}
echo Multiplication(85, 3) . "<br>";

function Division($g, $k) {
    $sum2 = $g / $k;
    return $sum2;
}
echo Division(9,3) . "<br>";
echo "<hr>";


// 2-е задание
// Функция, которая принимает одно целое число и внутри производит операции

$yee = 10;
function IntNum(int $yee) {
    $result = $yee + $yee;
    $result2 = $result * 2;
    $result3 = $result2 / 4;
    return $result3;
}
echo IntNum($yee);
echo "<hr>";


// 3-е задание
// Функция с именем пользователя, внутри показывает текущее время 

$name = 'John';
$time = time('H : i : s');
function User($name) {
}
echo User($time);


?>