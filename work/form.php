<?php

echo 'Привет, ' . htmlspecialchars($_POST["msg"] ?? "") . '! ' . 'Сегодня '. date("m.d.y") .'!';
require_once('form.html'); 
/* Там где "msg" вводится имя через браузер, страница которого привязана 
к нашему html документу */

/* Функция htmlspecialchars позволяет раскривать теги,
когда их в водят в поле ввода в браузере */





/* strip_tags - удаляет теги HTML и PHP из строки */

$text = '<p>Параграф.</p><!-- Комментарий --> <a href="#fragment">Ещё текст</a>';
echo strip_tags($text);
echo "\n";



?>