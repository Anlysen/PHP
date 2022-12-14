<?php
// Классы и обьекты
// public, private, protected - спецификаторы доступа
class SomePeople {
    public $age; // public используется для задания области видимости переменных
    public $name;
    public static $people = 1; // Статическая переменная класса
}
// Классы с одинаковыми названием ставить нельзя, выдаст ошибку


// echo SomePeople::$people;
$tim = new SomePeople();
$tim->age = 33;
echo $tim->age;

$bob = $tim;
$tim->age = 35;
echo $bob->age;

$fir = $sec = 3;
$fir = 4;

// echo $fir;
// echo "<br>";
// echo $sec;


?>