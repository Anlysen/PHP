<?php

echo 'Привет, ' . htmlspecialchars($_POST["msg"] ?? "") . '! ' . 'Сегодня '. date("m.d.y") .'!';
//require_once('form.html'); 
/* Там где "msg" вводится имя через браузер, страница которого привязана 
к нашему html документу */

?>