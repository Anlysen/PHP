<?php

// Ассоциативные и индыксные массивы

$arr = ['name' => 'Andrew', 'age' => 30]; // Ассоциативный массив
$arr2 = ['Andrew' , 30]; // Индексный массив

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// 
// echo "<pre>";
// print_r($arr2);
// echo "</pre>";
// 
// echo $arr['age']; // Выводит один из элементов массива
// echo $arr2[1];

// Многомерные массивы, массив внутри которого есть другие массивы

$people = [
    'Ivan' => ['age' => 21, 'weight' => 63], // 1-й элемент массива  
    'Oleg' => ['age' => 25, 'weight' => 70], // 2-й элемент массива
    'Nika' => ['age' => 19, 'weight' => 53]  // 3-й элемент массива
];

echo $people['Oleg']['weight'] . "<br>"; // Узнаем содержимое массива Олег (его вес)

echo "<pre>";
print_r($people['Oleg']); // Показывает содержимое массива в массиве
echo "</pre>";

// Интерполяция элемента массива в строку

$arr3[0] = 11;
echo "Now it's $arr3[0] am". "<br>"; // Пример с индексным массивом

$arr4['time'] = 7;
echo "Now it's $arr4[time] pm". "<br>"; // Пример с ассоциативным массивом (в этом примере на ключ time мы не ставим ковычки)

echo "Oleg weighs {$people['Oleg']['weight']} kg"; // Вывод элемента многомерного массива интерполяции в строку


?>