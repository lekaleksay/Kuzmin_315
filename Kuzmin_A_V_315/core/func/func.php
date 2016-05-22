<?php
/* ****************************************************************************************************************************************************
Кузьмин Алексей Владимирович <leksayleksay@gmail.com>
23/05/2016 00:40:00
func.php - сборник функций для работы с базой данных.
Расположен в корневом каталоге Kuzmin_A_V_315/
**************************************************************************************************************************************************** */

require_once 'core/config/db.php';  // Работает
// Функция выбора данных

function get_request(){
	$url = $_GET["url"];
	return $url;
}
function inf_view(){
	// Выполняем SQL-запрос
	$query = 'SELECT name, adress FROM contacts';
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

	// Выводим результаты в html
		echo "<table>\n";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    echo "\t<tr>\n";
	    foreach ($line as $col_value) {
	        echo "\t\t<td>$col_value</td>\n";
	    }
	    echo "\t</tr>\n";
	}
	echo "</table>\n";
	// Освобождаем память от результата
	mysql_free_result($result);
	
}	
function get_id_category(){
	$category_url = $_GET["category"];
	// Выполняем SQL-запрос
	$query = "SELECT id, name FROM category WHERE  url = '$category_url'";
	//$query->execute(array('url' => $category_url));
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

	// Выводим результаты в html
		echo "<table border: none>\n";
		echo "\t<tr>\n";
	while ($rows = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    echo "\t\t<td>".$rows["id"]." ".$rows['name']."</td>\n";
	    
	}
	echo "\t</tr>\n";
	echo "</table>\n";
	// Освобождаем память от результата
	mysql_free_result($result);

}
function view_link_category(){
	/*
	* В эту функцию, мы не передаем значение
	* эта функция, только выводит список категорий в
	* виде ссылок <a href="$url_category">$name_category</a>
	* 1. Написать запрос на выборку name, url
	* 2. Вывести значения в шаблон на главную index.php
	*/
	$query = "SELECT name, url FROM category;";
	//$query->execute(array('url' => $category_url));
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

	// Выводим результаты в html
		echo "<table class=\"link\">\n";
		echo "\t<tr>\n";
	while ($rows = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    echo "\t\t<td><a href=?category=".$rows["url"].">".$rows['name']."</a></td>\n";
	    
	}
	echo "\t</tr>\n";
	echo "</table>\n";
	// Освобождаем память от результата
	mysql_free_result($result);

}
function view_product(){
	$url_category = $_GET["category"];
	// Выполняем SQL-запрос
	if ($url_category == 'Petroleum'){
		$query = "SELECT  `category`.`name` ,  `product`.`name`, `product`.`characteristics`, `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'Petroleum'";
	} elseif ($url_category == 'Kerosene'){
		$query = "SELECT  `category`.`name` ,  `product`.`name`, `product`.`characteristics`, `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'Kerosene'";
	} elseif ($url_category == 'Propain'){
		$query = "SELECT  `category`.`name` ,  `product`.`name`, `product`.`characteristics`, `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'Propain'";
	} elseif ($url_category == 'Dizel'){
		$query = "SELECT  `category`.`name` ,  `product`.`name`, `product`.`characteristics`, `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'Dizel'";
	}
	
	$kostil = "SELECT  `category`.`name` ,  `product`.`name`, `product`.`characteristics`, `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'Petroleum'";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	
	echo "<table class=\"link2\">\n";
		echo "\t<tr>\n";
	while ($rows = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    echo "\t\t<tr><td>".$rows['name']."</td><td>".$rows['characteristics']."</td><td>".$rows['price']."</td></tr>\n";
	}
	echo "\t</tr>\n";
	echo "</table>\n";
	// Освобождаем память от результата
	mysql_free_result($result);
}


?>