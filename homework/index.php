<?php

// Первое Д/З
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


// Второе Д/З

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

// require_once __DIR__ . '/second.php';

class ConsClass{
    const NAME = "Вывести cons";
}
// echo ConsClass::NAME;
// echo "<hr>";

class DiscountedGoods{
    const NAME = "Уцененный товар интернет магазина OZON";
}
// echo DiscountedGoods::NAME;
// echo "<hr>";



// Третье Д/З

$str1 = "Today in the morning ";
$str2 = "wos freezing ";
$str3 = "and snowing";
$snow = $str1 . $str2 . $str3;

// echo $snow;

$num1 = 11;
$num2 = 22;
$num1 .= $num2;
// echo "<br>";
// echo $num1;

$text1 = "Скоро я ";
$text2 = "буду знать ";
$text3 = "PHP";
// echo "<br>";
// echo $text1, $text2, $text3;

$a = 50;
$b = 23;
$c = 8;
$e = 13;
//echo $a + $b;
//echo $e * $c;
//echo $b - $e;
//echo $b / $c;
//echo $b % $c;

$number = 209;
if ($number % 2) {
    //echo "Число в переменной: $number не четное";
}else{
    //echo "Число в переменной: $number четное";
}

$digit1 = 8;
$digit2 = 4;
$digit3 = 12;
$digit4 = 1;
/*
echo ++$digit1 . "<br>";
echo $digit2++ . "<br>";
echo --$digit3 . "<br>";
echo $digit4-- . "<br>";
*/
$abc1 = "aaa";
$abc2 = "bbb";
$abc3 = "ccc";
$abc4 = "eee";
/*
echo ++$abc1 . "<br>";
echo $abc2++ . "<br>";
echo --$abc3 . "<br>";
echo $abc4-- . "<br>";
*/
/*echo "<h3>Постфиксный инкремент</h3>";
$a = 5;
echo "Должно быть 5: " . $a++ . "<br />\n";
echo "Должно быть 6: " . $a . "<br />\n";

echo "<h3>Префиксный инкремент</h3>";
$a = 5;
echo "Должно быть 6: " . ++$a . "<br />\n";
echo "Должно быть 6: " . $a . "<br />\n";

echo "<h3>Постфиксный декремент</h3>";
$a = 5;
echo "Должно быть 5: " . $a-- . "<br />\n";
echo "Должно быть 4: " . $a . "<br />\n";

echo "<h3>Префиксный декремент</h3>";
$a = 5;
echo "Должно быть 4: " . --$a . "<br />\n";
echo "Должно быть 4: " . $a . "<br />\n";
*/



// Четвертое Д/З

$lo = 20;
$lo1= '9';
$ring = 4;
$ma = "apple watch";
$ha = "ima1c";

//var_dump($lo < $ring);
//echo "<br>";
//var_dump($ma !== $ha);

$a1 = 9;
//echo ++$a1;

if ($lo % 73) {
    //echo "Переменная: $lo четная";
}else{
    //echo "Переменная: $lo не четная";
}






// 5-е Д/З

/*
$time1 = 7;
if($time1 == 7){
    echo "Сейчас 7:00 утра";
}elseif($time1 == 8){
    echo "Сейчас 8:00 утра";
}elseif($time1 == 10){
    echo "Сейчас 10:00 утра"; 
}else{
    echo "Неизвестное время";
}
?>
<?php
if($time1 == 7):
?>
<h1>Сейчас утро</h1>
<?php
elseif($time1 == ''):
    ?>
    <h2>Сейчас день</h2>
    <?php
    elseif($time1 == 'e'):
        ?>
        <h3>Сейчас вечер</h3>
        <?php
        endif
*/



        ?>