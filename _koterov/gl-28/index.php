<?php
	header("Content-type: text/html; charset = utf-8");
	require "libs.php";


?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php

	$date = new DateTime("", new DateTimeZone("Asia/Barnaul"));

	echo $date->format(DateTime::COOKIE);

	$dateBirth =  new DateTime("1986-07-31 00:00:01");

	echo "<br>".($life = $date->diff($dateBirth))->format("%d-%m-%Y %H:%i:%s");
	echo "<br>";
	$rec = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('..\.'),
		 true);
	foreach ($rec as $file){
		echo $file."<br>";
	}

?>

</body>
</html>