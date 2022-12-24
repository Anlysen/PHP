// <?php
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

$tom = clone $tim;
$tom->age = 22;
// echo $tom->age;

// echo $tim->age;// 
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



// Константы
// define()

define('PI', 3.14, false);

// echo PI;
// echo defined('PI');

if (defined('PI')){ // Если в этой строке записана true, сработает правая строка, если false сработает вторая строка
    // echo "Константа есть";
}else{
    // echo "Константы нет";
}


/* Список констант

__LINE__ - Отвечает за текущую строку в файле
__FILE__ - Полный путь и имя текущего файла
__FUNCTION__ - Функция
__CLASS__ - Имя класса
__MATHOD__ - Имя метода
__DIR__ - Текущий каталог дтректории
PHP_VERTION - Версия интерпритатора PHP
OS_VERTION - Версия операционой системы
PHP_EOL - Символ конца строки, для Windows \n, для Linux \r\n
*/


// echo "File name" . __FILE__ . "<br>";
// echo __DIR__;

// echo "Подключаемый файл";
// echo "<hr>";


?> 