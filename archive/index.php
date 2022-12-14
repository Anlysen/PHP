<?php
// Классы и обьекты
// public, private, protected - спецификаторы доступа
class SomePeople {
    public $age; // public используется для задания области видимости переменных
    public $name;
}
// Классы с одинаковыми названием ставить нельзя, выдаст ошибку

$nick = new SomePeople;
$nick->age = 30;
$nick->name = "Nick";

// echo $nick->name;
// unset($nick);
// $dasha = new SomePeople();
// $nick = 11;
// С этого момента nick уже не nick, а переменная

class location {
    public $x;
    private $y;
    public $z;
}

$loc = new Location();
$loc->x = 23.22;
$loc->z = 54.23;



?>