<?php

// function getResult($var) { // Аргумент - это то, что находиться в скобках
//     $var = $var * 2;
//     return $var;
// }
// 
// $new = 10;
// echo getResult($new) . "<br>"; // Выведет 20, Так как функция была создана для умножения содержимого на 2, в эту функцию мы ставим созданную новую переменную
// echo $new; // Покажет содержимое переменной 10


function getResult(&$var) { // Такая же функция как и выше, только добавлен амперсант
    $var = $var + 2; // Передача аргументов по ссылке, происходит изменение переменной
    return $var;
}
/* Амперсант - параметр по ссылке. Благодаря амперсанту & переменная $var и $new1 
имеют связь между собой ссылкой. Любые изменения параметров происходит изменение и с самой переменной. */

$new1 = 10;
echo getResult($new1) . "<br>";
echo $new1; 

// Необязательные параметры

function getBrowser($br1 = 2, $br2 = 4) { // Если в этом случае убрать параметры аргументов, то выдаст фатальную ошибку
    $br = $br1 * $br2; // Первая переменная $br в этом случае создается для результата
    return $br;
}

echo getBrowser() . "<br>"; // Умножаются те параметры, которые созданы в самой функции
echo getBrowser(3) . "<br>"; // Здесь цифра 3 идет вместо первого параметра $br1 = 2, 3 * 2 = 12
echo getBrowser(5, 5) . "<br>"; // Цифры в скобках заменяют параметры переменных $br1, $br2


// Переменная (или изменяемое) количество параметров

function myList(...$items) { // Воспринимается как массив
    foreach ($items as $v) {
        echo $v . "<br>";
        // echo "$v<br>"; // Оба вывода echo идентичны друг другу 
    }
}

myList('Nick', 'Mike', 'Sara', 'Andrew');


// Пример многоточий, если в массиве множество параметров

$some = ['PHP', 'Python', 'JS', 'HTML', 'CSS'];
myList(...$some);

?>