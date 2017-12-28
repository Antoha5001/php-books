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
	foreach ($flags as $name) {
		preg_match_all($pattern, $text, $matches, $name);
		echo "FLAG - " . $name . "\n<br>";
		print_r($matches);
		echo "<br>\n";
	}
	$str = "<hTmL><BodY style='background: white'>Hello!</BodY></hTmL>";

	$str = preg_replace_callback("{(?'lteg'</?)(?'content'\w+)(?'rteg'.*?>)}s",
		function ($catch) {
		return $catch['lteg'].strtolower($catch['content']).$catch['rteg'];
		}, $str);
	echo htmlspecialchars($str);
	echo "<br>\n";
	$str = "<hTmL><BodY style='background: white'>Hello!</BodY></hTmL>";
	$str = preg_replace_callback_array([
			"{(?'lteg'</?)(?'content'\w+)(?'rteg'.*?>)}s"
			=> function ($catch) {return $catch['lteg'].strtolower($catch['content']).$catch['rteg'];}
	],$str);
	echo htmlspecialchars($str);
	echo "<br>\n";
	$fruits = ["orange","apple","apricot","lemon"];
	usort($fruits, function ($a,$b){ return $b <=> $a;});
	print_r($fruits);
?>
</body>
</html>