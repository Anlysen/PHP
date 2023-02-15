<?php

// Слияние массивов

//$sum = $arr1 + $arr2;
$arr1 = ['my', 'text', 2 => 'tt']; 
$arr2 = ['our', 'some', 'text2'];
$sum = array_merge($arr1, $arr2); // По порядку выводит элементы массивов

echo "<pre>";
print_r($sum);
echo "</pre>" . "<br>";

// Сравнение массивов

$a1 = [1, 3, 5, 7, 9];
$a2 = [1, 3, 5, "7", 9];
$a3 = [1, 3, 5, 7];
$a4 = [1, 3, 4, 7, 9];

if ($a1 == $a2) {
    echo "Массивы равны <br>";
} else {
    echo "Массивы не равны <br>";
}

if ($a1 == $a3) {
    echo "Массивы равны <br>";
} else {
    echo "Массивы не равны <br>";
}

$arr11 = [0 => 1, 1 => 2];
$arr22 = [0 => 1, 1 => '2'];

if ($arr11 === $arr22) {
    echo "Массивы равны <br>";
} else {
    echo "Массивы не равны <br>";
}

// Проверка на существование массивов 

// isset()
for ($i = 0; $i <= 6; $i++) {
    if (isset($a1[$i])) {
        echo "Элемент массива \$a1[$i] существует <br>";
    } else {
        echo "Элемент массива \$a1[$i] не существует <br>";
    }
}
// is_array()
if (is_array($arr22)) {
    echo "Переменная \$arr22 является массивом <br>";
} else {
    echo "Переменная \$arr22 не является массивом <br>";
}
// in_array()
if (in_array(7, $a2, true)) {
    echo "Цифра 7 существует внутри массива";
} else {
    echo "Цифра 7 не существует внутри массива";
}

// Если в массиве существует строковый цифровой элемент то в in_array() ставим true, иначе выведет результат что существует

// array_key_exists(key, array)

// Удаление эелементов массива
// unset($a2); - удалить весь массив
unset($a2[2]);
echo "<pre>";
print_r($a2);
echo "</pre>" . "<br>";


?>