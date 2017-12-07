<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<h1>First programm</h1>
<?php

var_dump($GLOBALS);
echo $_SERVER['SCRIPT_NAME'] ?? "";

?>
<?php if (!isset($_GET['submit'])){?>
<form action="<?= $_SERVER['SCRIPT_NAME']?>?vasya=loshara" method="post">
<!--	Логин: <input type="text" name="login" value=""><br/>-->
<!--	Пароль: <input type="text" name="password" value=""><br/>-->
	<select name="city[]" id="" multiple>
		<option value="Москва">Москва</option>
		<option value="Барнаул">Барнаул</option>
		<input type="hidden" name="city[bar]" value="0">
		<input type="checkbox" name="city[bar]" value="1">
	</select>
	<input type="submit" value="Нажмите на кнопку, чтобы запустить сценарий!" name="submit">
</form>
	
<?php } else{
//	if($_GET['login'] == "Anton" && $_GET['password'] === "123"){
//		echo "Вам открыт доступ";
//	} else {
//		echo "Доступа нет!";
//	}
	if($_GET['city'][0]){

		echo $_GET['city'][0];
	}
} ?>
</body>
</html>