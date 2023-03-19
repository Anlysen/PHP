<?php

// 1-е задание
// Рекурсия
function recur($s) {
    if ($s > 100) {
        echo ($s--) . "<br>";
        recur($s);
    } else return;
}
echo recur(105) . "<br>";




$phone_num = [
    'Alex' => ['unix' => 358],
    'Frenk' => ['dcs' => 877]
];
//echo '<pre>';
//print_r($phone_num);
//echo '</pre>';

function iterating_through_an_Array($phone_num) {
    if (is_array($phone_num)) {
        for ($i = 0; $i < count($phone_num); $i++) {
            if (is_array($phone_num[$i])) {
                iterating_through_an_Array($phone_num[$i]);
            } else {
                echo $phone_num[$i] . "<br>";
            }
        }
    } else {
        echo $phone_num . "<br>";
    }
}
iterating_through_an_Array('Alex') . "<br>";





// Пример
function first() {
    return 'First function';
}
function second() {
    return 'Second function';
}
$newFunction = rand(0,1) ? 'first' : 'second'; //В это строке мы ставим rand(), чтобы при вызове  
// нам показывало любую из 2-х функций
echo $newFunction() . "<br>";


?>