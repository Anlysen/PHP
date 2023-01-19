<?php

// Операторы
// Конкатынация или обьединение строк

//$str1 = "Хорошо, что я учу";
//$str2 = "PHP";
//$num = 123;
//$num2 = 321;

//$str = $str1 . $str2;
//$nums = $num2 . $num;
// $num .= $num2;

// echo $num2, $num, $str1, $str2;
// echo $nums;

// Арифметические операторы

// echo (4 + 3) * (21 - 7);
// intval() внутрь то, что хотим сделать целочисленным значением
// echo (int)(5 / 3);

// echo 1 % 2; // Число получается не четное
// echo 6 % 2; // Число четное
// echo 111 % 2; // 0 - счетное, 1 - несчетное

/*
$number = 5353;
if ($number % 2) {
    echo "Число в переменной: $number не четное";
}else{
    echo "Число в переменной: $number четное";
}
*/



//Инкремент и декремент

//$number = 111;
//$var = 2;

/*
echo $number ** $var;
echo $var . "<br>";
++$var; префиксный
$var++; //постфиксный 
echo $var . "<br>";
*/

//$var1 = 1;
//$var2 = 11;
//префиксная форма
//echo ++$var1 . "<br>";

//постфиксная форма
//echo $var2++ . "<br>";
//echo $var2 . "<br>";

//$abc = "bbb";
//echo ++$abc;

$number1 = 123;
$number2 = 321;
$number3 = 123;
$number4 = '123';
$str1 = "some text";
$str2 = "new0 text";

//echo $number1 > $number2; 
//var_dump($number1 > $number2); //false
//var_dump($number1 < $number2); //true
//var_dump($str1 < $str2); //false
//var_dump($number1 <= $number3); //true
//var_dump($number1 == $number2); //оператор равенства
//var_dump($number1 != $number2); //оператор не равенства
//var_dump($number1 === $number4); //строгое равенство
//var_dump($number1 !== $number4);

//var_dump(0 === 0); //обьекты в строгом равнении (true)
//var_dump(0 === ''); //типы данных уже не соответствуют, так как идет строка (false)
//var_dump(0 === null); //тип данных разные
//var_dump(1 != '1'); //они равны, а оператор не равенства (false)
//var_dump(1 !== '1'); //получаем (true) типы данных не соответствуют


/*
$mob = 0;
if($mob == 1) {
    echo "Нужно куть еще один телефон";
}elseif($mob == 2) {
    echo "У меня достаточно телефонов";
}elseif($mob == 3 || $mob > 1){
    echo "У меня много телефонов, продам 1";
}else{
    echo "Тебе не повезло";
}
*/
/*
$alpha = 'b';
if ($alpha == 'b'): 
    ?>
<h1>Обычный html h1</h1>
<?php
elseif ($alpha == 'a'):
    ?>
    <h2>Обычный html h2</h2>
    <?php
    else: ?>
<h3>Обычный html h2</h3>
<?php
endif
*/

/*
if($fiag1){
    if($flag2){
        echo "<p>Оба флага возврвщают true</p>"; //Здесь нужно будет несколько раз вписывать else
    }
}
*/

$fiag1 = false;
$flag2 = false;

/*
// пример с "и"
if($fiag1 && $flag2){
    echo "<p>Оба флага возврвщвют true</p>";  //Здесь достаточно один раз прописать else
}else{
    echo "<p>Один или оба флага возвращают false</p>";
}

// пример с "или"
if($fiag1 || $flag2){
    echo "<p>Оба флага возврвщвют true</p>";
}else{
    echo "<p>Оба флага возвращают false</p>";
}
*/

//($content = file_get_contents("C:\Users\79896\YandexDisk\Скриншоты")) || exit('Ошибка');
//echo $content;


if(file_get_contents("../homework/second.php")){ // Указаваем на уровень директории выше ставя ../
    echo "Мы получили файл";
}


// Условный оператор
// x ? y : z
// выражение1 ? выражение2 : выражение3

$x = 13;
$x = $x > 0 ? $x = 11 : $x; // Тернарный оператор 
echo $x;



?>