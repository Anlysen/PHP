<?php

// Функции

//function myFunc() { // Создается функция программы
//    // В теле идут операторы
//}

//if (true) {
//    $some = getSum();
//    echo $some;
//}

// Нужно всегда обращаться к функции только после ее создания

function getSum($num1, $num2) { // Сюда принимает числа функции
    $sum = $num1 + $num2; // Вместо чисел могут быть переменные
    return $sum; // Используется внутри функции для наружнего результата
    //echo $sum; // В echo тоже можно произвести сложение, но так делать не нужно
}
echo getSum(11, 22) . "<br>";
echo getSum(2341, 222323.43) . "<br>"; // Все так же выполнит функцию

//echo getSum(); // Не чего не выведет

//$some = getSum();
//echo $some; // Если эту функцию убрать, то retuen не сработает

// В любом месте можно использовать echo, как ниже, так и выше функции
// Так тоже можно делать echo getSum()

// После названия функции в скобках записываются аргументы
// Аргументы могут быть как переменные так и цифры
// Указывая int мы показываем, что параметр относится к integer (целочисленое значение)

$aa = 123;
$bb = 321;
echo getSum($aa, $bb); 

?>