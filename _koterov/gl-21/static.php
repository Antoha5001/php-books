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

	class MyStatic
	{
		public static $home = "Внутри дома";
		public static function where(){
			echo "<br>".self::$home;
		}
	}

	class Counter{
		private static $count;

		function __construct(){
	  	self::$count++;
	  }
	  function __destruct()
	 {
		self::$count--;
	 }
	 public static function getCount(){
			return self::$count;
	 }
   }

	$st = new MyStatic();

	echo MyStatic::$home;
	MyStatic::$home = "Уже ушол";
	$st::where();

	$count1 = new Counter();
	$count2 = new Counter();
	$count3 = new Counter();

	echo Counter::getCount();
?>
</body>
</html>