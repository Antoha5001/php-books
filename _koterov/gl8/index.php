<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<h1>First programm</h1>
<?php

echo $_SERVER['QUERY_STRING'] ?? "";

?>
<form action="hello.php">
	Логин: <input type="text" name="login" value=""><br/>
	Пароль: <input type="text" name="password" value=""><br/>
	<input type="submit" value="Нажмите на кнопку, чтобы запустить сценарий!">
</form>
</body>
</html>