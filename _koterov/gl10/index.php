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
<h1>Глава 10. Конструкции языка</h1>
<?php

	$a = ['a' => 'aa', 'b' => 'bb', 'cc', 'ee'];

	//for(	reset($a); ($k = key($a)); next($a)){
	//	echo $a[$k]."\n";
	//}
	//each($a);
	foreach ($a as &$value) $value .= ".";

	foreach ($a as $value) {
		$value .= ".";
	}
	foreach ($a as $value) {
		echo $value . "<br/>";
	}
	$b = ['c'];
	$c = array_merge($a, $b);
	//var_dump($c);
	//for ($i = 0; $i < count($c); $i++) {
	//	echo $c[$i];
	//}
	$nameList[] = "Anton";
	$nameList[] = "Vasya";
	//echo current($a);
	//echo next($a);
	//echo current($a);
	//echo reset($a);

	$nameList["Sidorov"] = [
		"Sidorov" => [
			"name" => "Ivan",
			"age" => 18,
		],
	];


	//echo(count($nameList));
	//var_dump($nameList);
	unset($nameList);
	//echo(count($nameList));
	$arr = [
		'Anton' => [
			'city' => 'Barnaul'
		],
	];
	$arrSer = serialize($arr);
	echo $arrSer;
	$arrUnser = unserialize($arrSer);
	print_r($arrUnser);
?>
</body>
</html>