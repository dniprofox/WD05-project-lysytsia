<?php 

// DB SETTINGS
//костанты наших содинений

define('DB_HOST', 'localhost');
define('DB_NAME', 'project');
define('DB_USER', 'root');
define('DB_PASS', '');


//устанавливаем путь к корневой директории  поста по протоколу HTTP
// Хост сайта

define('HOST', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/');

// Физический путь к корневой директории скрипта
define('ROOT', dirname(__FILE__).'/');


?>