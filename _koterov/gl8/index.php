<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<h1>First programm</h1>
<?php

echo $_SERVER['SCRIPT_NAME'] ?? "";

?>
<?php if (!isset($_GET['submit'])){?>
<form action="<?= $_SERVER['SCRIPT_NAME']?>">
	Логин: <input type="text" name="login" value=""><br/>
	Пароль: <input type="text" name="password" value=""><br/>
	<input type="submit" value="Нажмите на кнопку, чтобы запустить сценарий!" name="submit">
</form>
<?php } else{
	if($_GET['login'] == "Anton" && $_GET['password'] === "123"){
		echo "Вам открыт доступ";
	} else {
		echo "Доступа нет!";
	}
} ?>
</body>
</html>