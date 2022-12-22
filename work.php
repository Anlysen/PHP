<?php

// require_once 'archive/index.php'; // Относительный путь

// require_once 'C:/php/archive/index.php'; // Абсолютный путь

require_once __DIR__ . '/archive/index.php'; // Абсолютный путь
echo "Это файл index.php" . "<br>";

// Константы класса

class ConstantClass{
    const NAME = "const";
}
// defined(name);
// echo ConstantClass::NAME;

if(defined('ConstantClass::NAME')){
    echo 'Константа определена <br>';
}
else{
    echo 'Константа не определена <br>';
}

?>