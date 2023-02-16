<?php

// 1-е задание
// Слияние массивов
$deal = ['saw', 'cleaner'];
$deal2 = ['manege' => 11, 'police'];
$all = array_merge($deal, $deal2);

echo "<pre>";
print_r($all);
echo "</pre>" . "<hr>";

// Сравнивание массивов
$g1 = [5, 6, 0, 2];
$g2 = [5, 6, 0, 2];

if ($g1 == $g2) {
    echo "Массивы равны <br>";
} else {
    echo "Массивы не равны <br>";
}

$pip = ['love' => 14];
$lil =['love' => '14'];

if ($pip === $lil) {
    echo "Массивы равны <br>";
} else {
    echo "Массивы не равны <br>";
}

// Проверка на существование массивов
// isset
for ($i = 0; $i <= 5; $i++) {
    if (isset($g1[$i])) {
        echo "Элемент массива \$g1[$i} существует <br>";
    } else {
        echo "Элемент массива \$g1[$i} не существует <br>";
    }
}

// is_array
if (is_array($pip)) {
    echo "Переменная \$pip является массивом <br>";
} else {
    echo "Переменная \$pip не является массивом <br>";
}

// in_array
if (in_array(14, $lil, true)) {
    echo "Цифра 14 существует внутри массива";
} else {
    echo "Цифра 14 существует внутри массива";
}

// Удаление элементов в массиве
unset($g2[1]);
echo "<pre>";
print_r($g2);
echo "</pre>";

echo "<hr>";

// 2-е задание
$fruits = ['apple' => 10, 'pineapple' => 15, 'bananas' => 20, 'avakado' => 25, 'tangerine' => 30, 'cherry' => 35];
echo array_rand($fruits) . "<br>"; // Выводит ключ
echo $fruits[array_rand($fruits)] . "<hr>"; // Выводит значение

// 3-е задание
$num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$new_arr = [];
foreach ($num as $value) { // Добавление четных чисел в пустой массив $new_arr из другого массива $num
    if (($value % 2) == 0) { 
        $new_arr[] = $value;
        echo $value . "<br>";
    }
}
echo "<hr>";

// 4-е задание
//$date = file_get_contents('month.txt'); // Выводит обычный текстовый документ
//echo $date;
$monthes = file('month.txt'); // Помещает текстовый файл в массив
echo "<pre>";
print_r($monthes);
echo "</pre>";
echo "<hr>";

// 5-е задание
$alpha = [];
$rand = rand(5, 10);
for ($a = 0; $a <= $rand; $a++) { // Создание массив со случайным количеством элементов от 5 до 10, элементы которого принимают случайное значение от 0 до 100. 
    $rand2 = rand(0, 100);
    $alpha[] = $rand2;
}
sort($alpha);
echo "<pre>";
print_r($alpha); // Сортировка массива
echo "</pre>";

?>