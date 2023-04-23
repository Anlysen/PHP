<?php

echo "<h1>Передача параметров методом GET</h1>";

//echo $_GET['name'] . "<br>";
//echo $_GET['age'];
//
//echo "<pre>";
//print_r($_GET);
//echo "</pre>";

// http://localhost:4000/les19.php/?name=andrew&age=30
// Через url-адрес вставляем ключивое слово name и свое слово andrew через =
// Выведет слово andrew в браузере
// Имя параметра - это ключь массива


// http://localhost:4000/les19.php/?id[]=999$id[]=888&id[]=01 выведет массив


//http://localhost:4000/les19.php/?str=русский язык. Так же выводит массив
// В этом случае плохо то, что закодирован пробел кириллицы на %
// Нужно, что-бы весь кириллический текст был закодирован


echo "<a href='test.php?text=" . urlencode('Привер php!') .
"'>ссылка</a>"; 
// Таким образом кодируется весь текст методом urlencode
// Когда мы смотрим код страници, то видим как текст 'Привер php!' весь заменен символами


// parse_url() предостовляет полную информацию о текущей странице,
// номер порта, информация о хосте и многое другое
$url = "https://user:admin@site.com/page/
index.php?id=12&value=val#author";
// Выстраевает асоциативный массив

$url = parse_url($url); // Полностью показывает данные массива
echo "<pre>"; // В этих данных будет показываться все данные пользователя
print_r($url);
echo "</pre>";

echo $url['host']; // Вводим данные ключа массива
// Получаем результат сайта site.com


?>