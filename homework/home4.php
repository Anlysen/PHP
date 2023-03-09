<?php

// Функция, которая принимает элементы массива
// 1-е задание
$my_friends = ['Andrew', 'Vladimir', 'Vlad', 'Anton', 'Igor'];

// 2-е задание
function myFriend($my_friends) {
    foreach ($my_friends as $kay) {
        echo "Hello,  " . $kay . "<br>"; 
    }
}

/* Эта конструкция позволила все элементы массива (имена друзей) вывести 
в окно браузера со словом "Hello" */

echo myFriend($my_friends) . "<hr>";

// Функция для вычисления математических операций
// 3-е задание
$x = 6;
$y = 4;
function getNumbers($x, $y) { 
        switch ($x . $y) {
            case $sum = $x + $y:
                echo "Result 10>";
                break;
            case $sum2 = $x * $y:
                echo "Result 24";
                break;           
            }
            return $sum . $sum2;
    }
echo getNumbers($x, $y) . "<hr>";

$target = 1; 
$start = 3;

/* В этом примере нам нужно сделать переменную $start идентичной
содержимым переменной $target */

switch ($target) {
    case $start - 1:
        print "A";
        break;
    case $start - 2:
        print "B";
        break;
    case $start - 3:
        print "C";
        break;
    case $start - 4:
        print "D";
        break;
}


?>