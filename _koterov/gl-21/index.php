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
	class MyClass{
		public $a = 5, $b = 10;

		function summ (){
			return $this -> a + $this -> b;
		}

	}

	$myClass = new MyClass();
	$myClass -> a = 100;
	echo "{$myClass -> summ()}";
?>
</body>
</html>