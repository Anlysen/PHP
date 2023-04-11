<?php

// Работа с HTML при помощи PHP

$str = "<p>Строка, которая содержит <strong>html</strong> теги</p>";
echo $str;

?>

<h3><?php echo $str; // Так же выводит текст под тегом <h3>?></h3> 


<?php

//htmlspecialchars(); // Игнорирует код и выводит его как текст



?>