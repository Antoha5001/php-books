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
			  10,15,22,43,64
	];

	function collect($arr, $callback)
	{

		foreach ($arr as $v) {
			yield $callback($v);
		}
	}

	$collect = collect($arr, function ($e){
		return $e * $e;
	});

	foreach ($collect as $v){
		echo $v.BR;
	}

	function select($arr, $callback){

		foreach ($arr as $v){
			if($callback($v)) yield $v;
		}

	}

	foreach (select($arr, function ($e){
//		if($e % 2 == 0) return $e;
	   return $e % 2 == 0 ?  true :  false;
	}) as $v){
		echo "Чётное число: ".$v.BR;
	};

	function square($val){
		yield $val * $val;
	}

	function evenSquare($arr){
		foreach ($arr as $value){
			  $value % 2 == 0 ? yield from square($value) : false;
		}
	}

	foreach (evenSquare($arr) as $value){
		echo "Квадрат чётных чисел: ".$value.BR;
	}

	function generator(){
		yield 1;
		yield from [2,3];
	}

	foreach (generator() as $v){
		echo $v;
	}

	function numRange($n){
		for ($i =0; $i < $n; $i++){
			yield $i;
		}
	}

	foreach (numRange(100) as $value){
		echo $value;
	}
	echo BR.memory_get_usage();
?>


</body>
</html>