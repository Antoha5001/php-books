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
<h1>Глава 12. Генераторы</h1>
<?php

	function gen($from = 0, $to = 100)
	{

		for ($i = $from; $i < $to; $i++) {
			echo "<p>Значение =" . $i . "</p>";
			yield $i;
		}
	}

	foreach (gen() as $v) {
		echo $v;
		if ($v > 5) break;
	}

	$arr = [
		10, 15, 22, 43, 64
	];

	function collect($arr, $callback)
	{

		foreach ($arr as $v) {
			yield $callback($v);
		}
	}

	$collect = collect($arr, function ($e) {
		return $e * $e;
	});

	foreach ($collect as $v) {
		echo $v . BR;
	}

	function select($arr, $callback)
	{

		foreach ($arr as $v) {
			if ($callback($v)) yield $v;
		}

	}

	foreach (select($arr, function ($e) {
//		if($e % 2 == 0) return $e;
		return $e % 2 == 0 ? true : false;
	}) as $v) {
		echo "Чётное число: " . $v . BR;
	};

	function square($val)
	{
		yield $val * $val;
	}

	function evenSquare($arr)
	{
		foreach ($arr as $value) {
			$value % 2 == 0 ? yield from square($value) : false;
		}
	}

	foreach (evenSquare($arr) as $value) {
		echo "Квадрат чётных чисел: " . $value . BR;
	}

	function generator()
	{
		yield 1;
		yield from [2, 3];
	}

	foreach (generator() as $v) {
		echo $v;
	}

	function numRange($n)
	{
		for ($i = 0; $i < $n; $i++) {
			yield $i;
		}
	}

	foreach (numRange(100) as $value) {
		echo $value;
	}
	echo BR . memory_get_usage();
	echo "<h3>Использование ключей</h3>";

	$asoc = [
		"first" => 1,
		"second" => 2,
		"third" => 3,
		"fourth" => 4,
		"fifth" => 5,
		"sixth" => 6
	];
	function getKey($arr, $callback){
		foreach ($arr as $k => $v){
			yield $k => $callback($v);
		}
	}

	$getKey = getKey($asoc, function ($e){
		return $e = $e * $e;
	});

	foreach ($getKey as $k =>$v){
		echo $v." ($k)".BR;
	}
	echo "<h3>Использование ссылки</h3>";

	function &reference (){
		$b = 3;
		while($b > 0){
			yield $b;
		}
	}

	foreach (reference() as &$number){
		echo (--$number)."	";
	}

	function block(){

		while (true){
			$string = yield;
			echo $string;
		}
	}
	block() -> send("hello world");
	$b = block();
	$b-> send("Ещё hello world");
echo BR;
	function generator3(){
		yield 1;
		yield 5;
		return yield from two_three();
	}

	function two_three(){
		yield 2;
		yield 3;
		return 4;
	}

	$gen3 = generator3();
	foreach ($gen3 as $v){
		echo $v;
	}

	echo "Return ".$gen3->getReturn();

?>


</body>
</html>