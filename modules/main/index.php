<?php 

//получаем записи из таблицы.которые хотим вывести и записываем их в переменные

$details = R::find('about', 1); //выводим все из таблицы about

 //print_r($details);
 //echo $details[1]['name'];
 //echo $details[1]['description'];

$aboutName =  $details[1]['name'];
$aboutDescription = $details[1]['description'];

$title = "Главная";
$content ="Содержимое главной страницы";


// Готовим контент для центральной части
ob_start(); // вывод данных из буфера

include ROOT . "templates/main/main.tpl";

$content = ob_get_contents(); 

ob_end_clean();// прекращаем вывод


// Выводим шаблоны

include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";

?>