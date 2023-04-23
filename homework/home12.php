<?php

echo "<h1>GET-параметры</h1>";

date_default_timezone_set('Europe/Moscow'); // Выводит московское время в окно браузера
$time = date('H:i:s');

echo "<a href='home.test.php?text=" . urlencode('Привет, пользователь: {login}') .
"<br>" . urlencode('Ваш пароль: {password}') . "<br>" . urlencode('Текущее время:') .
$time . "'>ссылка</a>";



?>