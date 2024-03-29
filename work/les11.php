<?php

// Рекурсивные функции
// Функция вызывает саму себя

function recur($num) {
    // Если параметр $num больше 10, продолжаем рекурсии
    /* Функция заканчивается когда проверяемое число доходит до 10,
с которым сравнивается в функции */
    if ($num > 10) {
        /* Уменьшать значение параметра $num и его
        выводим в браузер */
        echo ($num--) . "<br>"; // В этом участке кода от числа 15 отнимается единицу
        // Производим рекурсивный вызов функции
        recur($num);
    } else return; // return возвращает пустую строку, если false, это когда дошло до 10
}

recur(15) . "<br>"; // Заданое в этой строке число идет в работу скрипта выше^^^



/* Факториал - произведение всех целых чисел, меньших или равных 
данному числу. Работает так: n! = 1 * 2 * 3 * 4 * 5 ....*/

function factorial($vol) {
    if ($vol <= 1) return 1;
    // Здесь происходит повторный вызов функции
    return $vol * factorial($vol - 1);
}
echo factorial(5) . "<br>";

function factorial2($vol) {
    $result = 1;
    for ($i = 1; $i <= $vol; $i++) {
        $result *= $i;
    }
    return $result;
}
echo factorial2(11);

?>