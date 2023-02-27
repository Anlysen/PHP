<?php

// 1-е задание
// Функция с глобальной переменной
function getNums() {
    global $sum;
    $sum = 20 * 10;
    return $sum;
}

$sum = 50;
echo getNums() . "<hr>";

// 2-е задание
// Второй раз использовать функцию
function gotSum() {
    $num = 30 * 10;
    return $num;
}

$num = 650;
echo gotSum() . "<br>";
echo $num . "<hr>";

// 3-е задание
// Функция с именем и датой
function personalInformation($name = 'Curtis',  $age = 30) {
    $birthdate1 = '03.02.1993';
    $date_now1 = '27.02.2023';
}
echo "<pre>";
print_r(personalInformation()); 
echo "</pre>";
echo "<hr>";

?>