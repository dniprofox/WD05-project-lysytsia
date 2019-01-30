<?php 

//echo "index.php";

require "config.php";
require "db.php";




/* ..........................................

РОУТЕР
это блок кода,который на основе запросов выводит разные модули сайта
............................................. */

// request URL = http://project/blog/post?id=15
$uri =  $_SERVER["REQUEST_URI"]; //выводит раздел,который задает пользователь
$uri = rtrim($uri, "/"); // обрезать "/"
$uri = filter_var($uri, FILTER_SANITIZE_URL); //обработка ввтроенным фильтром 
$uri = substr($uri, 1); //вырезаем первый символ "/"
$uri = explode('?', $uri); //обрезаем строку и превращем запрос в массив

// передаем запрос пользователя

switch ( $uri[0]) {
	case '':
		include "modules/main/index.php";
		break;

	case 'about':
		include "modules/about/index.php";
		break;

	case 'contacts':
		include "modules/contacts/index.php";
		break;

	case 'blog':
		include "modules/blog/index.php";
		break;

	default:
		include "modules/main/index.php";
		break;
}

?>