<?php

echo "<h1>Homework- кодировка файла</h1>" . "<hr>";





echo "<h3>Загрузка в TXT-файл</h3>";
$lockmith = [
    'name' => 'Okey Locksmith',
    'sector' => 'Servise',
    'url' => 'https://okeylocksmith.com/',
    'include' => ['Change or Re-Key Locks', 'Home Lockouts', 
    'Safe installation', 'Install dead bolts', 'Lock repairs']
];
echo json_encode($lockmith);

$filed = "json.txt"; // Создаем название текстового файла
file_put_contents($filed, $lockmith); // Отсюда выводим содержимое файла

echo "<hr>";





echo "<h3>Выгрузка из TXT-файла</h3>";
$txt_file = file('usa.txt'); // В этом вайле находится текстовый документ
// С помощью file() мы добавляем txt-файл в php-файл
echo $txt_file[0] . "<br>"; // В тексте 7 строк, выводим каждую начиная счет с 0
echo $txt_file[1] . "<br>";
echo $txt_file[2] . "<br>";
echo $txt_file[3] . "<br>";
echo $txt_file[4] . "<br>";
echo $txt_file[5] . "<br>";
echo $txt_file[6] . "<hr>";


?>