<?php

echo "<h2>Обьединение элементов мвссива в строку</h2>";

$cafe_menu = ['cakes', 'croissants','milkshake', 'cookies', 'syrup'];
$cafe_str = implode(", ", $cafe_menu);
echo $cafe_str . "<hr>";





echo "<h2>Замена символа в строке</h2>";

$aurora = 'The Alaska aurora borealis season lasts for more 
than half of the year and staying in Alaska for at least three 
nights during aurora season will up your chances of seeing an 
aurora display to over ninety percent – those are some great odds!';
echo $new_aurora = str_replace("a", "+", $aurora) . "<hr>";





echo "<h2>Новые функции</h2>";

// 1 addslashes - экранирует строку с помощью слешей
$cook = "Make your favorite food O'connel!";
echo addslashes($cook) . "<br>";

// 2 bin2hex - преобразует бинарные данные в шестнадцатеричное представление
$sneakers = bin2hex('Make an order');
var_dump($sneakers); // В этом выводе выведены 23 символа с цифрами
echo "<br>";
var_dump(hex2bin($sneakers)); // Здесь выведен текст
echo "<br>";

// 3 convert_uudecode — Декодирует строку из формата uuencode в обычный вид
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`") . "<br>"; // Покажет текст - I love PHP
// Символы преобразует в текст

// 4 convert_uuencode — Кодирует строку в формат uuencode
$some_str = 'test\text new\r\n';
echo convert_uuencode($some_str) . "<br>"; // В этом случае наоборот, текст преобразовывает в символы

// 5 count_chars — Возвращает информацию о символах, входящих в строку
$data = "This is a big data";
foreach (count_chars($data, 1) as $i => $val) {
    echo "\"" , chr($i) , "\" встречается в строке $val раз(а).\n" . "<br>"; 
}
// Описывает каждый символ, сколько чего в тексте

// 6 crypt — Необратимое хеширование строки
echo 'Стандартный DES: ',crypt('rasmuslerdorf', 'rl'),"\n" . "<br>";
echo 'Расширенный DES: ',crypt('rasmuslerdorf', '_J9..rasm'),"\n" . "<br>";
echo 'MD5:          ',crypt('rasmuslerdorf', '$1$rasmusle$'),"\n" . "<br>";
echo 'Blowfish:     ',crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'),"\n" . "<br>";
echo 'SHA-256:      ',crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$'),"\n" . "<br>";
echo 'SHA-512:      ',crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'),"\n" . "<br>";

// 7 lcfirst — Преобразует первый символ строки в нижний регистр
$bar = 'HELLO WORLD';   
$bar = lcfirst($bar);
echo $bar . "<br>";

// 8 ord — Конвертирует первый байт строки в число от 0 до 255
$str = "\n";
if (ord($str) == 10) {
    echo "Первый символ \$str - перевод строки. \n" . "<br>";
}

// 9 wordwrap — Переносит строку по указанному количеству символов
$story = 'The quick brown fox jumped over the lazy dog';
$new_story = wordwrap($story, 10, "<br />\n") . "<br>"; // Через каждые 10 символов будет переносить строку
echo $new_story;

// 10 strtolower — Преобразует строку в нижний регистр
$walk = 'I REALLY LOVE WALK NEAR THE WATER, LAKE OR RIVER!';
$walk = strtolower($walk);
echo $walk;



?>