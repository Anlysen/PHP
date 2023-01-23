<?php

$flag1 = 'ok';
$flag2 = 'ok-2';

    switch ($flag1) {
        case 'ok':
            echo "<p>Флаг возвращает ok</p>";
            break;

            default:
            echo "<p>Флаг не возвращает ok</p>";
            break;
        }

    switch ($flag2) {
        case 'ok-2':
            echo "<p>Флаг возвращает ok-2</p>";
            break;

            default:
            echo "<p>Флаг не возвращает ok-2</p>";
            break;
        }

    switch ($flag1) {
        case 'lol':
            echo "<p>Выводит lol</p>";
            break;

            default:
            echo "<p>Не выводит lol</p>";
            break;
    }    
    
    switch ($flag2) {
        case 'voise':
            echo "<p>Выводит voise</p>";
            break;

            default:
            echo "<p>Не выводит voise</p>";
            break;
    }  

    $lang = "germany";

    switch ($lang) {
        case 'english':
            echo "<p>Это английский язык!</p>";
            break;
        case 'france':
                echo "<p>Это французский язык!</p>";
            break;  
        case 'germany':
                echo "<p>Это немецкий язык!</p>";
            break;  

            default:
            echo "<p>Отсутствует какой либо язык!</p>";
    }

    $num = 3;

    begin:
    $num++;
    echo "$num<br>";
    if ($num >= 20) goto finish;
    goto begin;
    finish:

?>