<?php

// конструкция switch
/*
$someText = 'okey';
switch ($someText) {
    case 'value':
        echo 'Вырожение равно okey-2';
        break;

    case 'okey':
        echo 'Вырожение равно okey';
        break;
    
    default:
        echo 'Вырожение не | равно okey';
        break;
}

// конструкция switch с if

if ($someText == 'value') {
    echo 'Вырожение равно okey-2';
} elseif ($someText == 'okey') {
    echo 'Вырожение равно okey';
} else {
    echo 'Вырожение не | равно okey';
}
*/

// 3-я конструкция switch 

/*
$num = 100;

switch (true) {
    case ($num > 0 && $num <= 50):
        echo 'true';
        break;

    case ($num > 0 && $num <= 500):
            echo 'true-2';
        break; // Здесь break прерывает выполнение default
    
    default:
    echo 'false';
        break;
}
*/

// Оператор goto

$nums = 1;

begin: //Эту строку игнорирует
$nums++; // Добавляет единицу
echo "$nums<br>"; // Выводит содержимое
if ($nums >= 22) goto finish; // Если переменная больше либо равна 22-м, тогда заканчивает работу с goto 
goto begin; // Возврвщает к начальному begin и создает цикл который не прервется до тех пор, пока не дойдет до числа 22
finish:

?>