<?php

$my_birthdate = 1993;

$date = function () use ($my_birthdate) {
    if (isset($my_birthdate)) {
        echo $my_birthdate;
    }
};
$date();
echo "<br>";





function BirthDate($my_birthdate, $my_age) {
    $result = $my_birthdate + $my_age;
        return $result;
    }
    echo BirthDate(1993, 30) . "<br>";

$my_birthdate = $my_age = 2023;
echo $my_birthdate;





?>