<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<style>
		h1{
			font-size: 30px;
		}
	</style>
</head>
<body>
<h1>Глава 9. Конструкции языка</h1>
<?php

foreach ($_SERVER as $key => $value){
	echo "<span>".$key.": </span>".$value."<br>";
}
?>
</body>
</html>