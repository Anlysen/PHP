<?php

$arr = [1, 2, 3];

list($one, $two, $three) = $arr;

echo $arr[1] . "<br>"; // Оба варианта вывода идентичны друг другу
echo $two . "<hr>";

// Обход массива

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}

$andr = [
    'name' => 'Andrew',
    'age' => 30,
    'weight' => 75
];
foreach ($andr as $key => $value) {
    echo $key . "-" . $value .  "<br>";
}

foreach ($andr as $val) { // Вариант без key
    echo $val . "<br>";
}

foreach ($arr as $key => $value) {
    echo $value . "<br>";
}

// foreach не удобен при больших обьемах данных в массиве
// При больших обьемах данных массива больше подходит цикл for



?>