<?php

// Классы
class People {  // Действует как инструкция
    public $russian;
    public $americans;
    public $chinese;
    public $ukainians;
    public $kazakhs;
}

// Сам обьект
$nations = new People; // Создаем переменную и присваеваем ей наш класс
$nations->russian = 160000000;
$nations->americans = 300000000; // В этом месте, мы присваеваем элементы к переменным, которые создали выше
$nations->chinese = 1500000000;

/* При выводе обращаемся к нужной нам переменной таким 
способом, как и когда присваивали числа в нужные переменные */

echo $nations->russian . "<br>"; 
echo $nations->americans . "<br>";
echo $nations->chinese . "<br>";

$people = clone $nations; // Здесь мы копировали переменную $nations и добавили ее в $people
$people->russian = 144; // Тут приминяется клонирование
echo $people->russian . "<hr>"; 




// Константы
// define() - применяется для создания константы

/* В скобках вводится имя константы и значение 
Все константы записываются в верхнем регистре */
define('PI', 3.14); 
define('num', 10); 
echo PI . "<br>"; // При выводе "PI" (без кавычек), получаем его значение 3,14
echo num . "<br>";

// defined() - проверяет, есть константа, или нет
//defined(PI);
//echo PI . "<br>"; // Если константа существует, выведет в браузер ее содержимое

if (defined('PI')) { // В скобках конструкции if, ставим кавычки на имя константы
    echo "Константа существует" . "<br>";
} else {
    echo "Константа не существует" . "<hr>";
}





/*

_LINE_ - отвечает за текущую строку в файле
_FILE_ - полный путь текущего файла
_FUNCTION_ - имя функции
_CLASS_ - имя класса
_METHOD_ - метод
_DIR_ - текущий каталог директории
PHP_VERSION - версия интерпретатора php
OS_VERSION - версия операционной системы
PHP_EOL - символ конца строки
Во всех случаях ставим по два подчеркивания

*/




echo "Files" . __FILE__ . "<br>";
echo __DIR__;

/*
Результат выполнения строк
FilesC:\php\homework\class.php
C:\php\homework
*/ 


?>