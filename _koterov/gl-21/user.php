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

	class User
	{
		public $name,
			$password,
			$referer,
			$time;

		public function __construct(array $settings)
		{
			$this->name = $settings["name"];
			$this->password = $settings["password"];
			$this->referer = $_SERVER['PHP_SELF'];
			$this->time = time();
		}

		public function __sleep()
		{
			return ["name", "referer", "time"];
		}

		public function __wakeup()
		{
			$this->time = time();
		}

	}

	class Admin extends User{
		public function __construct($settings)
	  {
	  	parent::__construct($settings);
	  }
   }

	$anton = new User([
		'password' => 123,
		 'name' => "Anton"
	]);

	$pack = serialize($anton);

	echo $pack;

	$file = fopen("user.txt","w");
	fwrite($file,$pack);
	fclose($file);

	$file = fopen('user.txt','r') or die("Нет такого файла");
	$text = fread($file, filesize("user.txt"));
	fclose($file);

	$obj = unserialize($text);

	echo "<pre>";
	print_r($obj);
	echo "</pre>"
?>
</body>
</html>