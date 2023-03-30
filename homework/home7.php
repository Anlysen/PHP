<?php

// Задание с вложеной функцией
function outside() {
    $big_deal = ['shops', 'offices', 'logistics'];
    function in() {
        echo 'In deal!' . "<br>";
        
    }
    in();
    print_r($big_deal) . "<br>";
}
echo outside() . "<br>";





// Динамическое имя
// 1-й с аргументами
function Continents(&$america = "USA", &$eurasia = "Russia", &$africa = "Nigeria") {
    return $eurasia;
}
echo Continents() . "<br>";

// 2-й без аргументов
function Oceans($pacific = 1, $atlantic = 2) {
    return $pacific;
}
echo Oceans() . "<br>";



// Умножение чисел через функцию
function Subtraction($a, $b) { // Создаем переменные, в которые попадут числа для вычисления
    $sum = $a * $b; // Здесь их умножаем
    return $sum;
}
echo Subtraction(5, 5) . "<br>"; // Сами числа
echo Subtraction(6, 6) . "<br>";
echo Subtraction(7, 2) . "<br>";

?>