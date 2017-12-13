<?php include_once "libs.php"; ?>

<?php
	$text = ['TITLE'];
	$toText = ['Глава 13. Строковые функции'];
	$mark = <<<MARKER
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>TITLE</title>
	<style>
		h1 {
			font-size: 30px;
		}
	</style>
</head>
<body>
<h1>TITLE</h1>
MARKER;

//	echo $mark;
	echo str_replace($text, $toText, $mark);
?>


<?php

	for ($i = 32; $i < 127; $i++){
		echo chr($i);
}
echo BR;
$str = "Привет, мир!";
	echo $str{2};
	echo BR;

	echo strlen($str);
	echo BR;
	echo mb_strlen($str);
	echo BR;
	$zero = 0;

	if ("$zero" === 0) echo 0;

	$str = "Какая-то строка";

	echo urlencode($str);

?>


</body>
</html>