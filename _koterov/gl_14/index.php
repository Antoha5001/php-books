<?php include_once "libs.php"; ?>

<?php
	$text = ['TITLE'];
	$toText = ['Глава 14. Функции для работы с массивом'];
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
	$native = ["a" => "red", "green", "blue"];
	$color = ["yellow", "red", "pink", "c" => "blue"];
	$merge = array_merge($native, $color);
	$unic = array_unique($merge);
	print_r($merge) ;
	echo BR;
	print_r($unic) ;

	$pacient = [
			  'fio' => "Иванов Семен Семёныч",
		 		"phone" => [
		 			333333,
					"+79998889090"
				]
	];
	echo BR;
	$json =  json_encode($pacient, JSON_UNESCAPED_UNICODE);
	echo $json;

	$decode = json_decode($json,true);
//	echo i$decode;
	echo BR;
print_r($decode);
	echo BR;
echo implode(" ", $decode);



?>


</body>
</html>