<?php

$arr = array(2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020);
$arr2 = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$arr3 = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

// Выводы элементов из массивов - 1
echo $arr3[0]; 
echo $arr2[1];
echo $arr[6] . "<br>";

// Выводы элементов из массивов - 2
echo $arr3[3]; 
echo $arr2[3];
echo $arr[3] . "<br>";

// Узнать колличество элементов в массиве
echo count($arr3) . "<br>";
echo count($arr2). "<br>";
echo count($arr). "<br>";

// Вывести последний элемент из массива
echo $arr3[count($arr3) - 1];
echo $arr2[count($arr2) - 1];
echo $arr[count($arr) - 1];




?>