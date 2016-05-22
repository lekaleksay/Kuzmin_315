<!DOCTYPE html>
<?php
/* ****************************************************************************************************************************************************
Кузьмин Алексей Владимирович <leksayleksay@gmail.com>
23/05/2016 00:40:00
contacts.php. - второстепенная страница, приложение к index.php.
Расположен в каталоге Kuzmin_A_V_315
*****************************************************************************************************************************************************/
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Oil Refining Ink</title>
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	 <h1>Oil Refining Ink</h1>
	<style>
		body {
			background: #000;
		}
	</style>
</head>
<body>
<table class ="body_shape">
<td class = "col1">
	banner side L
</td>
<td class = "col2">
<?php 
require_once 'core/func/func.php';
?>
	<table class = "Menu">
	<td><a href='index.php'>Main</a></td>
 	<td><a href='services.php'>Products</a></td>
	<td><a href='contacts.php'>Contacts</a></td>
	</table>
 	<p class="about">
 		Наша компания занимается крутыми вещами/
 	</p>
<?php 
echo inf_view();
?>
</td>
<td class = "col3">
	banner side R
</td>
</table>

</body>
</html>