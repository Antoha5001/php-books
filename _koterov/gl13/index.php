<?php include_once "libs.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<style>
		h1 {
			font-size: 30px;
		}
	</style>
</head>
<body>
<h1>Глава 13. Строковые функции</h1>
<?php

	for ($i = 32; $i < 127; $i++){
		echo chr($i);
}

?>


</body>
</html>