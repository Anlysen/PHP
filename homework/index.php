<?php

class People {
    public $chinese;
    public $russian;
    public $american;
    public $poles;
    public $germans;
}

$chinese = "Chine";
$russian = "Rostov-on-Don";
$american = "New-York";

// echo isset($american);
// echo "<br>"; 
// echo $chinese;

class Animals {
    public $tiger;
    public $kangaroo;
    public $zebra;
    public $dog;
    public $panda;
}

$kangaroo = "Fast";
$tiger = "Strong";
$dog = "Friendly";

// echo "<br>";
$status = isset($dog, $tiger);
// echo $status;

class Planet {
    public $earth;
    public $mars;
    public $pluto;
    public $venus;
    public $jupiter;
}

$earth = "Life";
$jupiter = "Huge";
$venus = "Hot";


$status2 = empty($earth);

// echo "<br>";
$str = "0";
if (isset($str)) {
    // echo "Переменная $str существует" . "<br>";
}

if (empty($str)) {
    // echo "Переменная $str пустая" . "<br>";
}

// echo gettype($status2); // Проверяем состояние переменной

class Animal {
    public $a;
    public $b;
    public $c;
    public $d;
    public $e;
}

$cl = new Animal;
$cl->a = "First";
// echo $cl->a;

$ora = new Animal;
$ora->c = "Orange";
// echo "<br>";
// echo $ora->c;

$blue = $ora;
$ora->c = "Blue";
// echo "<br>";
// echo $blue->c;

$ora->c = "Red";
// echo "<br>";
// echo $blue->c;


$km = new Animal;
$km->d = "100km/h";
// echo "<br>";
// echo $km->d;

require_once __DIR__ . '/second.php';

class ConsClass{
    const NAME = "Вывести cons";
}
echo ConsClass::NAME;
echo "<hr>";

class DiscountedGoods{
    const NAME = "Уцененный товар интернет магазина OZON";
}
echo DiscountedGoods::NAME;
echo "<hr>";


?>
