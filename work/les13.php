<?php

// Замыкания
echo "<h2>Замыкания</h2>";
// Замыкания применяются только к анонимным функциям в php

$mess = "Текст до создания функции <br>";
$test = function (array $some) use ($mess) { // Переменную мы не можем изменить, если мы ее передали через механизм "use"
    if (isset($some) && count($some) > 0) {
        echo $mess;
        foreach ($some as $li) {
            echo $li . "<br>";
        }
    }
};
$test([]);
$some[] = 'Text';
$test($some);

/* Замыкание - это функция, которая запоминает состояние окружения
в момент своего создания */

//Изменение окружения
$mess = 'Измененный текст <br>';

$some = [12, 32, 43, 53];
$test($some);





//С переменной
$a = 78;
var_dump(isset($a));

// С массивом
$arr = ['list' => 1, 'select' => NULL];
var_dump(isset($arr['list']));
var_dump(isset($arr['select']));


?>