<?php
// public, private, protected - спецификаторы доступа

// Класс-1
class SomePeople {
    public $age; // public используется для задания области видимости переменных
    public $name;
    public static $people = 1; // Статическая переменная класса
}

// echo SomePeople::$people;
// Обьект-1
$tim = new SomePeople(); // к переменной подключвется класс
$tim->age = 33; // Обьект > его свойство > его значение
// echo $tim->age;
// unset($tim); Сбросить переменную

$bob = $tim;
$tim->age = 35;
// echo $bob->age;

$fir = $sec = 3;
$fir = 4;

// echo $fir;
// echo "<br>";
// echo $sec;

class Location { // Класс-2
    public $x; 
    private $y;
    public $z;
}

$loc = new Location(); // Обьект-2
$loc->x = 23.22;
$loc->z = 54.23;

?> 