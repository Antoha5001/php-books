<!DOCTYPE html>
<html lang="en">
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
<h1>Глава 9. Конструкции языка</h1>
<?php

	$nameList[] = "Anton";
	$nameList[] = "Vasya";

	$nameList["Sidorov"] = [
		"Sidorov" => [
			"name" => "Ivan",
			"age" => 18,
		],
	];

	echo(count($nameList));
	var_dump($nameList);
	unset($nameList);
	echo(count($nameList));
?>
</body>
</html>