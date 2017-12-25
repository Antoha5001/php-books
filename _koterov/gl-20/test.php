<?php header("Content-type: text/html; charset = utf-8");
	include_once "libs.php" ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php
	$flags = [
		PREG_PATTERN_ORDER,
		PREG_SET_ORDER,
		PREG_SET_ORDER | PREG_OFFSET_CAPTURE
	];

	$pattern = "|<(\w+).*?>(.*?)</\\1>|s";
	$text = "<b>Текст</b> и ещё <i>другой текст</i>";
	foreach ($flags as $name){
		preg_match_all($pattern,$text,$matches,$name);
		echo "FLAG - ".$name."\n<br>";
		print_r($matches);
		echo "<br>\n";
	}
?>
</body>
</html>