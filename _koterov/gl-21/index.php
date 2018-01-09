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

	class MyClass
	{
		public $a;

		function summ(MyClass $obj)
		{
			return $this->a + $obj->a;
		}

		function __construct($settings)
		{
			$this->a = $settings['a'];
		}

		function __toString()
		{
			return "{$this ->a}<br>";
		}

	}

	$myClass = new MyClass([
		'a' => 88
	]);

	//	$bClass = new MyClass([
	//			  'a' => 12
	//	]);

	echo "{$myClass -> summ(new MyClass([
			  'a' => 12
	]))}";

	echo BR;
	echo "Значение $myClass";
	echo "Значение " . new MyClass(['a' => 12]);
	echo BR;

	class Base
	{
		public static function test()
		{
			echo __CLASS__ . " : " . __METHOD__;
		}

		public function getTest()
		{
			static::test();
		}
	}

	class Child extends Base
	{
		public static function test()
		{
			echo __CLASS__ . " : " . __METHOD__;
		}
	}

	Child::getTest();
	echo BR;

	class Container
	{
		private $title = "Класс контейнер";
		protected $id = 1;

		public function anonym()
		{
			return new class ($this->title) extends Container
			{
				public $name;

				public function __construct($title)
				{
					$this->name = $title;
				}

				public function getName(){
					echo "{$this->name} ({$this->id})";
				}

			};
		}

	}
	 (new Container)->anonym()->getName();

?>
</body>
</html>