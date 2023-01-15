<?php


// 1- задание
file_put_contents('hello.txt' , 'Hello, world!'); // Записывает строку
echo file_get_contents('hello.txt') , "<br>"; // Выводит в окно браузера

file_put_contents('2023-01-15-21-30-40.txt' , '1000');
echo file_get_contents('2023-01-15-21-30-40.txt') , "<br>";


// 2- задание
$x = 10;
$y = 5;
$z = 2;

if($x > $y){
    echo "Переменная: $x больше переменной: $y";
}else{
    echo "Переменная: $x меньше переменной: $y";
}
echo "<br>";


// 3- задание
if($x && $y){
    echo "Одна переменная больше другой";
}

?>