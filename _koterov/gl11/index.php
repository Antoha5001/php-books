<?php include_once "libs.php";
	setlocale(LC_ALL, 'ru_RU');
?>
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
<h1>Глава 11. Функции и области видимости</h1>
<?php sayHello("Привет") ?>
<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
	<select name="cities" id="cities">
	   <?php

		   echo getOption($arr);

	   ?>
	</select>
	<button type="submit">Выбрать город</button>
</form>
<?php
	if (isset($_REQUEST['cities'])) {
		foreach ($arr as $k => $v) {
			if ($k === $_REQUEST['cities']) {
				echo "<p>Вы выбрали " . $v . "</p>";
			}
		}
	}


	function sayHello($str)
	{
		echo "<p>$str</p>";
	}

	$str = "строка string";
	function toUpperCase(&$s)
	{
		$s = strtoupper($s);
		echo $s;
	}

	echo $str . "<br>";
	toUpperCase($str);
	echo $str . "<br>";
	echo strtoupper($str) . "<br>";

	$month = [
		1 => 'Январь',
		2 => 'Февраль'
	];
	function getMonth(int $n)/*:str*/{
		global $month;
		$str = "".$month[$n];
		echo is_string($str);
		return "Строка" ;
	}
echo getMonth(2);
	br();
//	echo 5!;
function fuctorial($n){
	if ($n <=0) return 1;
	else return $n * fuctorial($n -1);
}
echo fuctorial(4);
echo dumper($_SERVER);
function parent($a){

	function child($b){
		$b += 1;
		return $b * $b;
	}
	return $a * $a * child($a);
}

echo parent(3);
	echo child(3);
	echo PHP_OS;
	function funcName($s){
		echo $s;
	}
$f = "funcName";
	$f(5);

	$message = "Текст сообщения";
	$errors = [
			  "ошибка", "И ещё"
	];

	$func = function(array $errors) use($message){
		echo $message;
	};

	$func($errors);
	$message = "Новый текст";
	$func($errors);

	$a = 100;

	function &func2(){
		global $a;
		return $a;
	}

	$b = &func2();
	$b = 0;
	echo $a;

?>
</body>
</html>