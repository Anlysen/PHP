<?php

echo "<h1>JSON-формат</h1>";

$arr = [
    'fio' => 'Алла Лысенко',
    'age' => '26',
    'vk_url' => 'https://vk.com/allavardanyan',
    'learn' => ['HTML', 'CSS', 'PHP']
];
echo json_encode($arr, JSON_UNESCAPED_UNICODE | 
JSON_UNESCAPED_SLASHES) . "<br>"; // При добавлении еще атрибутов ставим оператор | - или 

// json_encode() - преобразует переменную (массив), происходит кодировка
// В случае если в массиве пишеться русский текст (кириллица), буквы кодируются
// Латинские буквы выводятся, не кодируются
// JSON_UNESCAPED_UNICODE - добавив такой атрибут в скобки, кириллица покажется





$json = '{"people":"Лысенко Андрей","adress":"Речная-27","mob":["+79896139339",
    "+386578865733"]}';
$arr2 = json_decode($json, true); // Вторым элементом ставим true - это для ассоциативных массивов
echo "<pre>";
print_r($arr2);
echo "</pre>";

// json_decode()



?>